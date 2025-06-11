<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Nette\Schema\Context;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactoP = Pagina::where('id_pagina', '=', 10)->get();
        $contactos = Contacto::all();

        return view('Dashboard/Contactos/index',compact('contactoP','contactos'));
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
        $contactoN = new Contacto();

        $contactoN->tipo = 'Teléfono';
        $contactoN->nombre = $request->nombre;
        $contactoN->titulo = $request->titulo;
        $contactoN->correo = $request->correo;
        $contactoN->numero = $request->numero;




        $contactoN->save();
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
        $contactoE = Pagina::find($id);
        $contactoE->titulo = $request->tituloC;
        $contactoE->descripcion = $request->desC;

        $contactoE->save();

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
        $contacto = Contacto::find($id);

        $contacto->delete();

        return back();
    }

        public function updateContactos(Request $request, $id)
    {
        $contactoN = Contacto::find($id);
         $contactoN->nombre = $request->nombreC;
        $contactoN->titulo = $request->tituloC;
        $contactoN->correo = $request->correoC;
        $contactoN->numero = $request->numeroC;

        $contactoN->save();

        return back();
    }


}
