<?php

namespace App\Http\Controllers;

use App\Tribunal;
use App\Examen;
use Illuminate\Http\Request;

class TribunalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tribunales = Tribunal::all();

        return view('pages.tables.tribunales.index', compact('tribunales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.tribunales.create');
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
            'TRICODIGO' => 'bail|required|max:7',
            'TRICANTIDAD' => 'bail|required|',
        ]);

        $tribunales = Tribunal::create($request->all());


        return redirect()->route('tribunales.index')
            ->with('success', 'Tribunal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tribunal  $Tribunal
     * @return \Illuminate\Http\Response
     */
    public function show($TRICODIGO)
    {
        $tribunales = Tribunal::findOrFail($TRICODIGO);
        return view('pages.tables.tribunales.show', compact('tribunales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tribunal  $Tribunal
     * @return \Illuminate\Http\Response
     */
    public function edit($TRICODIGO)
    {
        $tribunales = Tribunal::findOrFail($TRICODIGO);
        return view('pages.tables.tribunales.edit', compact('tribunales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tribunal  $Tribunal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $TRICODIGO)
    {
        
        $request->validate([
            'TRICODIGO' => 'bail|required|max:7',
            'TRICANTIDAD' => 'bail|required|',
        ]);
        
        $tribunales = Tribunal::findOrFail($TRICODIGO);
        $tribunales->update($request->all());

        return redirect()->route('tribunales.index')
            ->with('success', 'Tribunal updated successfully');
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tribunal  $Tribunal
     * @return \Illuminate\Http\Response
     */
    public function destroy($TRICODIGO)
    {
        $tribunales = Tribunal::findOrFail($TRICODIGO);
        $tribunales->delete();

        return redirect()->route('tribunales.index')
            ->with('success', 'Tribunal deleted successfully');
    }
}
