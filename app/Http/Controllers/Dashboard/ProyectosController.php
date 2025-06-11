<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Config::where('id_pagina', '=', 8)->get();

        return view('Dashboard/Proyectos/index',compact('proyectos'));
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
        $proyecto = new Config();

        $proyecto->id_pagina = 8;
        $proyecto->titulo1 = $request->tituloP;
        $proyecto->descripcion = $request->descripcionP;

        $this->cargarImagen($request,'imagenP',$proyecto,'imagen');

        $proyecto->save();
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
        $proyecto = Config::find($id);
        $proyecto->id_pagina = 8;
        $proyecto->titulo1 = $request->tituloP;
        $proyecto->descripcion = $request->descripcionP;

        $this->cargarImagen($request,'imagenP',$proyecto,'imagen');

        $proyecto->save();
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
        $proyecto = Config::find($id);
        $proyecto->delete();

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
