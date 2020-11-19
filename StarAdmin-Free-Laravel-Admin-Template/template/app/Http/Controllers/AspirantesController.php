<?php

namespace App\Http\Controllers;

use App\Aspirante;
use Illuminate\Http\Request;

class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirantes = Aspirante::all();

        return view('pages.tables.aspirantes.index', compact('aspirantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.aspirantes.create');
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
            'ASPCEDULA' => 'bail|required|max:13',
            'ASPNOMBRE' => 'bail|required|max:30',
            'ASPAPELLIDO' => 'bail|required|max:30',
            'ASPFECHANACIMIENTO' => 'bail|required|',
            'ASPLICENCIA' => 'bail|required|max:10',
            'ASPGRADOACTUAL' => 'bail|required|max:20',
            'ASPFECHAGRADOACTUAL' => 'bail|required',
        ]);

        $aspirantes = Aspirante::create($request->all());


        return redirect()->route('aspirantes.index')
            ->with('success', 'Aspirante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function show($ASPCEDULA)
    {
        $aspirantes = Aspirante::findOrFail($ASPCEDULA);
        return view('pages.tables.aspirantes.show', compact('aspirantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function edit($ASPCEDULA)
    {
        $aspirantes = Aspirante::findOrFail($ASPCEDULA);
        return view('pages.tables.aspirantes.edit', compact('aspirantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ASPCEDULA)
    {
        
        $request->validate([
            'ASPCEDULA' => 'bail|required|max:13',
            'ASPNOMBRE' => 'bail|required|max:30',
            'ASPAPELLIDO' => 'bail|required|max:30',
            'ASPFECHANACIMIENTO' => 'bail|required|',
            'ASPLICENCIA' => 'bail|required|max:10',
            'ASPGRADOACTUAL' => 'bail|required|max:20',
            'ASPFECHAGRADOACTUAL' => 'bail|required',
        ]);
        
        $aspirantes = Aspirante::findOrFail($ASPCEDULA);
        $aspirantes->update($request->all());

        return redirect()->route('aspirantes.index')
            ->with('success', 'Aspirante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function destroy($ASPCEDULA)
    {
        $aspirantes = ASPIRANTE::findOrFail($ASPCEDULA);
        $aspirantes->delete();

        return redirect()->route('aspirantes.index')
            ->with('success', 'Aspirante deleted successfully');
    }
}
