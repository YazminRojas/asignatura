<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index')->with('alumnos', Alumno::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumnoRequest $request)
    {
        $request->validate([
            'numeroControl'       =>  'required',
            'nombre'              =>  'required',
            'ApellidoPaterno'     =>  'required',
            'ApellidoMaterno'     =>  'required',
            'ciudad'              =>  'required',
            'direccion'           =>  'required',
            'telefono'            =>  'required',
            'fechaNacimiento'     =>  'required',
            'sexo'                =>  'required'

        ]);
        
        $docente = new Alumno([
            'numeroControl'       =>  $request->get('numeroControl'),
            'nombre'              =>  $request->get('nombre'),
            'ApellidoPaterno'     =>  $request->get('ApellidoPaterno'),
            'ApellidoMaterno'     =>  $request->get('ApellidoMaterno'),
            'ciudad'              =>  $request->get('ciudad'),
            'direccion'           =>  $request->get('direccion'),
            'telefono'            =>  $request->get('telefono'),
            'fechaNacimiento'     =>  $request->get('fechaNacimiento'),
            'sexo'                =>  $request->get('sexo')
        ]);

        $alumno->save();

        return redirect()->route('alumnos.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $alumnos=Alumno::findOrFail($id);
        return view('alumnos.edit',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumnoRequest  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
    public function datatable(){
        $Alumnos = Alumno::all();
        return view('alumnos.datatable', compact('alumnos'));
    }
}