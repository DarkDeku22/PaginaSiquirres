<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Imagen;
use App\Models\Pagina;
use Illuminate\Http\Request;

class AnuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $anuarioGeneral = Pagina::where('id_pagina',9)->get(); 
    // Solo las imágenes de la página 9
    $imagenesAgrupadas = Imagen::where('id_pagina', 9)
        ->select('titulo', 'id_imagen', 'url','descripcion') // o el nombre real del campo de la imagen
        ->get()
        ->groupBy('titulo'); // Agrupa por generación


    return view('Dashboard/Anuarios/index',compact('imagenesAgrupadas','anuarioGeneral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $generacionN = new Imagen(); 
        $generacionN->id_pagina = $request->id_pagina;
        $generacionN->titulo = $request->gene;
        $generacionN->descripcion = $request->descripcionA;

         $this->cargarImagen($request,'url',$generacionN,'url');

         $generacionN->save();

         session()->flash('alert', ['mensaje' => 'Se registró correctamente el préstamo', 'status' => 'success']);
         return back();

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $generacionE = Imagen::find($id);
         $generacionE->id_pagina = $request->id_paginaE;
        $generacionE->titulo = $request->tituloE;
        $generacionE->descripcion = $request->descripcionE;

         $this->cargarImagen($request,'urlE',$generacionE,'url');

         $generacionE->save();

         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagen::find($id);
        $imagen->delete();
         session()->flash('alert', ['mensaje' => 'Se Eliminó correctamente la imagen', 'status' => 'success']);
        return back();

    }

         public function cargarImagen(Request $request, $campo,$data,$atributo){

                if ($request->hasFile($campo)) {
            $file = $request->file($campo);
            $name = 'assets/img/'.$file->getClientOriginalName();
           $file->move(public_path('assets/img'), $name);


            $data->$atributo = $name;
        }
    }
}
