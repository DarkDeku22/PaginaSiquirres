<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Imagen;
use App\Models\Pagina;
use App\Models\Contacto;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlerGeneral extends Controller
{

    public function index(){

        $principal = Pagina::where('titulo', 'Inicio')->get();

        $paginas = Pagina::where('id_padre',$principal[0]['id_pagina'])->get();

        $pagImportantes = Pagina::where('id_pagina','=',2)->get();

        $config = Config::where('id_pagina',$pagImportantes[0]['id_pagina'])->get();

        $proy = Pagina::where('titulo', 'Proyectos')->get();

        $conf =Config::where('id_pagina', $proy[0]['id_pagina'] )->get();

        $slid = Slider::all();

        return view('/informativas/Informacion/index', compact('paginas', 'config','proy', 'conf', 'slid'));
    }

    public function nosotros(){

        $padre = Pagina::where('titulo', 'Nosotros')->get(); //EXTRAIGO AL PADRE

        $hijasNosotros = Pagina::where('id_padre', $padre[0]['id_pagina'])->get(); //LLAMO A LOS PAGINAS HIJAS DEL PADRE

        $texto = nl2br($hijasNosotros[2]['descripcion']);

        $config = Config::where('id_pagina', $padre[0]['id_pagina'])->get(); //LLAMOO A LOS CONFIG DEL PADRE

       return view('/informativas/Nosotros/nosotros', compact('hijasNosotros', 'texto', 'config'));
        
    }

    public function inf_detallada($id){

        $info = Pagina::where('id_pagina', $id)->get();
       
        //$img = Imagen::where('id_pagina', $id)->get();


       return view('/informativas/Informacion/info_Detallada', compact('info'));
    
    }


    public function actividades(){

        $activ = Pagina::where('titulo', 'Actividades')->get();

        $con = Config::where('id_pagina', $activ[0]['id_pagina'])->get();

        // return $con;

       return view('/informativas/Actividades/actividades', compact('activ', 'con'));
        
    }

    public function actividades_detalladas($id){


        $activ = Pagina::where('titulo','Actividades')->get();

        $info = Config::where('id_config', $id)->get();
       
        $img = Imagen::where('titulo', $info[0]['titulo1'])->get();


      return view('/informativas/Actividades/actividades-detalladas', compact('activ', 'info', 'img'));
    
    }

    public function proyectos(){

        $proy = Pagina::where('titulo', 'Proyectos')->get();

        $conf =Config::where('id_pagina', $proy[0]['id_pagina'] )->get();

        return view('/informativas/Proyectos/proyecto', compact('proy', 'conf'));
    }

    public function proyecto_Detalle($id){

        $info = Config::where('id_config', $id)->get();

        $img = Imagen::where('titulo', $info[0]['titulo1'])->get();

        return view('/informativas/Proyectos/proyecto_Detallado', compact('info', 'img'));
        
    }

    public function anuario(){
    
        $anuario = Pagina::where('titulo', 'Anuario')->get();
        $actual = null;
        $img  = Imagen::where('id_pagina', $anuario[0]['id_pagina'] )->get();

        // Paso 1: Subconsulta para obtener el ID mínimo de una imagen por cada año para la página específica
        $subQuery = Imagen::select(DB::raw('MIN(id_imagen) as id_imagen'), 'titulo')
            ->where('id_pagina', '=', $anuario[0]['id_pagina'])
            ->groupBy('titulo');

        // Paso 2: Unir con la tabla imagenes para obtener la información completa de esas imágenes
        $generaciones = Imagen::joinSub($subQuery, 'min_images', function ($join) {
                $join->on('imagenes.id_imagen', '=', 'min_images.id_imagen');
            })
            ->join('paginas', 'paginas.id_pagina', '=', 'imagenes.id_pagina')
            ->select('imagenes.titulo', 'imagenes.id_imagen')
            ->get();

        $generacion = "Generación 2017";

        return view('/informativas/Anuario/anuario', compact('img', 'generaciones', 'generacion', 'anuario','actual'));
      
}

    public function anuarioSeleccion($generacion){

        $anuario = Pagina::where('titulo', 'Anuario')->get();

        $base = Imagen::where('id_imagen','=', $generacion)->get();
        $actual = $base[0];

        $img = Imagen::where('titulo', $base[0]['titulo'])->get();        
        
        // Paso 1: Subconsulta para obtener el ID mínimo de una imagen por cada año para la página específica
        $subQuery = Imagen::select(DB::raw('MIN(id_imagen) as id_imagen'), 'titulo')
            ->where('id_pagina', '=', $anuario[0]['id_pagina'])
            ->groupBy('titulo');

        // Paso 2: Unir con la tabla imagenes para obtener la información completa de esas imágenes
        $generaciones = Imagen::joinSub($subQuery, 'min_images', function ($join) {
                $join->on('imagenes.id_imagen', '=', 'min_images.id_imagen');
            })
            ->join('paginas', 'paginas.id_pagina', '=', 'imagenes.id_pagina')
            ->select('imagenes.titulo', 'imagenes.id_imagen')
            ->get();

        return view('/informativas/Anuario/anuario', compact('img', 'generaciones', 'base', 'anuario','actual'));

}

    public function contactanos(){

       $contacto = Pagina::where('titulo', 'Contáctanos')->get();
        
       $tel = Contacto::where('tipo', 'telefono')->get();

    
        return view('/Informativas/Contactos/contactanos', compact('contacto', 'tel'));

    }

}