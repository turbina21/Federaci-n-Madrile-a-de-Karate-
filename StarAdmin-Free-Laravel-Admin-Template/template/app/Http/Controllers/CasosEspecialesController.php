<?php

namespace App\Http\Controllers;

use App\Caso;
use Illuminate\Http\Request;

class CasosEspecialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Caso::all();

        return view('pages.tables.casos.index', compact('casos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.casos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateBool($data)
    {
        if ($data == 'on') {
            return true;
        } else {
            return false;
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'CASCODIGO' => 'bail|required|max:7',
            'CASIMPEDIMENTOFISICO' => 'bail|nullable|max:30',
            'CASASCENSOS' => 'bail|nullable',
            'CASOBSERVACION' => 'bail|required',
        ]);

        $casos = Caso::create(
            [
                'CASCODIGO' => $request->CASCODIGO,
                'CASIMPEDIMENTOFISICO' => $request->CASCODIGO,
                'CASCERTIFICADOMEDICO' => $this->generateBool($request->CASCERTIFICADOMEDICO),
                'CASASCENSOS' =>$request->CASASCENSOS,
                'CASOBSERVACION' =>$request->CASOBSERVACION,
            ]
        );


        return redirect()->route('casos.index')
            ->with('success', 'Caso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caso  $Caso
     * @return \Illuminate\Http\Response
     */
    public function show($CASCODIGO)
    {
        $casos = Caso::findOrFail($CASCODIGO);
        return view('pages.tables.casos.show', compact('casos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caso  $Caso
     * @return \Illuminate\Http\Response
     */
    public function edit($CASCODIGO)
    {
        $casos = Caso::findOrFail($CASCODIGO);
        return view('pages.tables.casos.edit', compact('casos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caso  $Caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CASCODIGO)
    {

        $request->validate([
            'CASCODIGO' => 'bail|required|max:7',
            'CASIMPEDIMENTOFISICO' => 'bail|nullable|max:30',
            'CASASCENSOS' => 'bail|nullable',
            'CASOBSERVACION' => 'bail|required',
        ]);

        $casos = Caso::findOrFail($CASCODIGO);
        $casos->update([
            'CASCODIGO' => $request->CASCODIGO,
            'CASIMPEDIMENTOFISICO' => $request->CASCODIGO,
            'CASCERTIFICADOMEDICO' => $this->generateBool($request->CASCERTIFICADOMEDICO),
            'CASASCENSOS' =>$request->CASASCENSOS,
            'CASOBSERVACION' =>$request->CASOBSERVACION,
        ]);

        return redirect()->route('casos.index')
            ->with('success', 'Caso updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caso  $Caso
     * @return \Illuminate\Http\Response
     */
    public function destroy($CASCODIGO)
    {
        $casos = Caso::findOrFail($CASCODIGO);
        $casos->delete();

        return redirect()->route('casos.index')
            ->with('success', 'Caso deleted successfully');
    }
}
