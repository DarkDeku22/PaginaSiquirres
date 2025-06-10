<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Administrativo;
use App\Models\Config as ModelsConfig;
use App\Models\Estadisticas;
use App\Models\Pagina;
use App\Models\Config;
use Illuminate\Http\Request;
use PSpell\Config as PSpellConfig;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('pruebas');
         $pagina = Pagina::where('id_padre', '=', 3)->get();
         $administrativos = Administrativo::all();
         $estadisticas = Config::where('id_pagina', '=',3)->get();

         
        return view('Dashboard/Nosotros/index',compact('pagina','administrativos','estadisticas'));
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
        $paginaN = new Pagina();
        $paginaN->titulo = $request->tituloE;
        $paginaN->descripcion = $request->descripcionE;
        $paginaN->id_padre = $request->id_padre;
        $this->cargarImagen($request,'imagen',$paginaN,'feacture');

        $paginaN->save();
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
        $paginaHija = Pagina::find($id);

        $paginaHija->titulo = $request->tituloE;
        $paginaHija->descripcion = $request->descripcionE;
         $this->cargarImagen($request,'imagenE',$paginaHija,'feacture');


        //  return $paginaHija;
         $paginaHija->save();

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
        $paginaHija = Pagina::find($id);
        $paginaHija->delete();

        return back();
    }    
    
    public function destroyAdministrativo($id)
    {
        $administrativo = Administrativo::find($id);
        $administrativo->delete();
        return back();
    }  
    
    public function destroyEstadisticas($id)
    {
        $esta = Config::find($id);
        $esta->delete();
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



    public function storeAdmin(Request $request){
        $adminNuevo = new Administrativo();

        $adminNuevo->nombre = $request->nombreA;
        $adminNuevo->puesto = $request->puestoA;
        $adminNuevo->descripcion = $request->descripcionA;

         $this->cargarImagen($request,'imagenA',$adminNuevo,'imagen');

        $adminNuevo->save();

        return back();
    }

    public function updateAdmin(Request $request, $id)
    {
        $admin = Administrativo::find($id);

      $admin->nombre = $request->nombreA;
        $admin->puesto = $request->puestoA;
        $admin->descripcion = $request->descripcionA;

         $this->cargarImagen($request,'imagenA',$admin,'imagen');

        $admin->save();

         return back();
    }

        public function storeEstadistica(Request $request){
        $estadistica = new Config();

        $estadistica->id_pagina = $request->id_pagina;
        $estadistica->titulo1 = $request->titulo1;
        $estadistica->descripcion = $request->descripcion;


        $estadistica->save();

        return back();
    }

}
