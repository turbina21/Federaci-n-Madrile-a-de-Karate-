<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();

        return view('pages.tables.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.eventos.create');
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
            'EVECODIGO' => 'bail|required|max:7',
            'EVEFECHA' => 'bail|required|',
            'EVEHORA' => 'bail|required|',
            'EVELUGAR' => 'bail|required|max:30',
        ]);

        $eventos = Evento::create($request->all());


        return redirect()->route('eventos.index')
            ->with('success', 'Evento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $Evento
     * @return \Illuminate\Http\Response
     */
    public function show($EVECODIGO)
    {
        $eventos = Evento::findOrFail($EVECODIGO);
        return view('pages.tables.eventos.show', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $Evento
     * @return \Illuminate\Http\Response
     */
    public function edit($EVECODIGO)
    {
        $eventos = Evento::findOrFail($EVECODIGO);
        return view('pages.tables.eventos.edit', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $Evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $EVECODIGO)
    {
        
        $request->validate([
            'EVECODIGO' => 'bail|required|max:7',
            'EVEFECHA' => 'bail|required|',
            'EVEHORA' => 'bail|required|',
            'EVELUGAR' => 'bail|required|max:30',
        ]);
        
        $eventos = Evento::findOrFail($EVECODIGO);
        $eventos->update($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $Evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($EVECODIGO)
    {
        $eventos = Evento::findOrFail($EVECODIGO);
        $eventos->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento deleted successfully');
    }
}
