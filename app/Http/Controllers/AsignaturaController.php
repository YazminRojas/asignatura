<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Http\Requests\StoreAsignaturaRequest;
use App\Http\Requests\UpdateAsignaturaRequest;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.index')->with('asignaturas', Asignatura::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsignaturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsignaturaRequest $request)
    {
        $request->validate([
            'nombre'        =>  'required',
            'creditos'      =>  'required',
            'tipo'          =>  'required',
            'curso'         =>  'required',
            'semestre'      =>  'required'
        ]);
        
        $docente = new Asignatura([
            'nombre'        =>  $request->get('nombre'),
            'creditos'      =>  $request->get('creditos'),
            'tipo'          =>  $request->get('tipo'),
            'curso'         =>  $request->get('curso'),
            'semestre'      =>  $request->get('semestre'),
        ]);

        $alumno->save();

        return redirect()->route('asignaturas.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        $asignaturas=Asignatura::findOrFail($id);
        return view('asignaturas.edit',compact('asignaturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsignaturaRequest  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsignaturaRequest $request, Asignatura $asignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        $alumno->delete();
        return redirect()->route('asignaturas.index');
    }
    public function datatable(){
        $Asignaturas = Asignatura::all();
        return view('asignaturas.datatable', compact('asignaturas'));
    }
}
