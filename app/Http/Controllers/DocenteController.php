<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Http\Requests\StoreDocenteRequest;
use App\Http\Requests\UpdateDocenteRequest;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index')->with('docentes', Docente::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDocenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocenteRequest $request)
    {
        $request->validate([
            'numeroIdentificacion'=>  'required',
            'nombre'              =>  'required',
            'ApellidoPaterno'     =>  'required',
            'ApellidoMaterno'     =>  'required',
            'ciudad'              =>  'required',
            'direccion'           =>  'required',
            'telefono'            =>  'required',
            'fechaNacimiento'     =>  'required',
            'sexo'                =>  'required'

        ]);

        $docente = new Docente([
            'numeroIdentificacion'=>  $request->get('numeroIdentificacion'),
            'nombre'              =>  $request->get('nombre'),
            'ApellidoPaterno'     =>  $request->get('ApellidoPaterno'),
            'ApellidoMaterno'     =>  $request->get('ApellidoMaterno'),
            'ciudad'              =>  $request->get('ciudad'),
            'direccion'           =>  $request->get('direccion'),
            'telefono'            =>  $request->get('telefono'),
            'fechaNacimiento'     =>  $request->get('fechaNacimiento'),
            'sexo'                =>  $request->get('sexo')
        ]);

        $docente->save();

        return redirect()->route('docentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentes=Docente::findOrFail($id);
        return view('docentes.edit',compact('docentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocenteRequest  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocenteRequest $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
    public function datatable(){
        $Docentes = Docente::all();
        return view('docentes.datatable', compact('docentes'));
    }
}