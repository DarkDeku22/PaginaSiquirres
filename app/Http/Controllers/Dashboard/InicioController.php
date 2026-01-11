<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Imagen;
use App\Models\Pagina;
use App\Models\Slider;
use Illuminate\Http\Request;


class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        $dataPagina = Pagina::where('id_pagina', '=', 2)->get();
        $dataConfig = Config::where('id_pagina', 2)->get();
        $dataImagen = Imagen::where('id_pagina', 1)->get();
        // return $dataConfig;
        return view ('Dashboard/Inicio/index',compact('data','dataPagina','dataConfig','dataImagen'));

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
    //   return $request;
        $configNueva = new Config();

        $configNueva->id_pagina = 2;
        $configNueva->titulo1 = $request->titulo;
        $configNueva->descripcion = $request->descripcion;
        $configNueva->url = $request->url;

        $this->cargarImagen($request,'imagen',$configNueva,'imagen');

        $configNueva->save();

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cargarImagen(Request $request, $campo,$data,$atributo){

                if ($request->hasFile($campo)) {
            $file = $request->file($campo);
            $name = 'assets/img/'.$file->getClientOriginalName();
           $file->move(public_path('assets/img'), $name);


            $data->$atributo = $name;
        }
    }

    public function eliminarPagina($id){
        $pagina_eli = Config::find($id);
        $pagina_eli->delete();
        return redirect()->back();
    }


    public function editarPaginasImportantes($id, Request $request){

        $editando = Pagina::find($id);

        $editando->titulo = $request->tituPagina;
        $editando->descripcion = $request->desPagina;

        $editando->save();

        return back();

    } 
    
   public function StoreSlider(Request $request){
    $NewSlider = new Slider();

    $NewSlider->boton = $request->boton;
    $NewSlider->subtitulo = $request-> subtitulo;  
    $NewSlider->url = $request->url;
    $NewSlider->img = $request->img;

    $this->cargarImagen($request,'nueva_img',$NewSlider,'img');

    $NewSlider->save();

    return back();

   }

    public function editarSlider(Request $request,$id){
    $NewSlider = Slider::find($id);

    $NewSlider->boton = $request->boton;
    $NewSlider->subtitulo = $request-> subtitulo;  
    $NewSlider->url = $request->url;
    $NewSlider->img = $request->img;

    $this->cargarImagen($request,'nueva_img',$NewSlider,'img');

    $NewSlider->save();

    return back();

   }

       public function eliminarSlide($id){

        $pagina_eli = Slider::find($id);
        $pagina_eli->delete();
        return redirect()->back();
    }

        public function editarPagina($id, Request $request){

        $editando = Config::find($id);

        $editando->titulo1 = $request->titulo;
        $editando->descripcion = $request->descripcion;
        $editando->url = $request->url;

        $this->cargarImagen($request,'nueva_imagen',$editando,'imagen');
        $editando->save();

        return back();

    } 
}
