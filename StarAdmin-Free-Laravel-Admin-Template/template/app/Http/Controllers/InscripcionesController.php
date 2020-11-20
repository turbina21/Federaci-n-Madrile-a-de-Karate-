<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();

        return view('pages.tables.inscripciones.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'INSCODIGO' => 'bail|required|max:7',
            'EXACODIGO' => 'bail|required|max:7',
            'REQCODIGO' => 'bail|max:7|nullable',
            'CONCODIGO' => 'bail|max:7|nullable',
            'ASCEDULA' => 'bail|required|max:13',
            'CASCODIGO' => 'bail|max:7|nullable',
            'INSFECHA' => 'bail|required',
            'INSGRADO' => 'bail|required|max:20',
        ]);

        $inscripciones = Inscripcion::create($request->all());


        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscripcion  $Inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show($ASPCEDULA)
    {
        $inscripciones = Inscripcion::findOrFail($ASPCEDULA);
        return view('pages.tables.inscripciones.show', compact('inscripciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscripcion  $Inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit($ASPCEDULA)
    {
        $inscripciones = Inscripcion::findOrFail($ASPCEDULA);
        return view('pages.tables.inscripciones.edit', compact('inscripciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscripcion  $Inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ASPCEDULA)
    {
        
        $request->validate([
            'INSCODIGO' => 'bail|required|max:7',
            'EXACODIGO' => 'bail|required|max:7',
            'REQCODIGO' => 'bail|max:7|nullable',
            'CONCODIGO' => 'bail|max:7|nullable',
            'ASCEDULA' => 'bail|required|max:13',
            'CASCODIGO' => 'bail|max:7|nullable',
            'INSFECHA' => 'bail|required',
            'INSGRADO' => 'bail|required|max:20',
        ]);
        
        $inscripciones = Inscripcion::findOrFail($ASPCEDULA);
        $inscripciones->update($request->all());

        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscripcion  $Inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy($ASPCEDULA)
    {
        $inscripciones = Inscripcion::findOrFail($ASPCEDULA);
        $inscripciones->delete();

        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion deleted successfully');
    }
}
