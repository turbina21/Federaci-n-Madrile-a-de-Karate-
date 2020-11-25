<?php

namespace App\Http\Controllers;

use App\Convalidacion;
use Illuminate\Http\Request;

class ConvalidacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convalidaciones = Convalidacion::all();

        return view('pages.tables.convalidaciones.index', compact('convalidaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.convalidaciones.create');
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
            'CONCODIGO' => 'bail|required|max:7',
            'CONPAIS' => 'bail|required|max:30',
            'CONTIEMPOPERMANENCIA' => 'bail|required|',
        ]);


        $convalidaciones = Convalidacion::create(
            [
                'CONCODIGO' => $request->CONCODIGO,
                'CONPAIS' => $request->CONPAIS,
                'CONTIEMPOPERMANENCIA' => $request->CONTIEMPOPERMANENCIA,
                'CONCURRICULUMVISADO' => $this->generateBool($request->CONCURRICULUMVISADO),
                'CONACREDITACION' => $this->generateBool($request->CONACREDITACION),
                'CONCOPIATITULOS' => $this->generateBool($request->CONCOPIATITULOS),
                'CONPLANESTUDIO' => $this->generateBool($request->CONPLANESTUDIO),
            ]
        );



        return redirect()->route('convalidaciones.index')
            ->with('success', 'Convalidacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Convalidacion  $Convalidacion
     * @return \Illuminate\Http\Response
     */
    public function show($CONCODIGO)
    {
        $convalidaciones = Convalidacion::findOrFail($CONCODIGO);
        return view('pages.tables.convalidaciones.show', compact('convalidaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convalidacion  $Convalidacion
     * @return \Illuminate\Http\Response
     */
    public function edit($CONCODIGO)
    {
        $convalidaciones = Convalidacion::findOrFail($CONCODIGO);
        return view('pages.tables.convalidaciones.edit', compact('convalidaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convalidacion  $Convalidacion
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

    public function update(Request $request, $CONCODIGO)
    {

        $request->validate([
            'CONCODIGO' => 'bail|required|max:7',
            'CONPAIS' => 'bail|required|max:30',
            'CONTIEMPOPERMANENCIA' => 'bail|required|',
        ]);

        $convalidaciones = Convalidacion::findOrFail($CONCODIGO);

        $convalidaciones->update(
            [
                'CONCODIGO' => $request->CONCODIGO,
                'CONPAIS' => $request->CONPAIS,
                'CONTIEMPOPERMANENCIA' => $request->CONTIEMPOPERMANENCIA,
                'CONCURRICULUMVISADO' => $this->generateBool($request->CONCURRICULUMVISADO),
                'CONACREDITACION' => $this->generateBool($request->CONACREDITACION),
                'CONCOPIATITULOS' => $this->generateBool($request->CONCOPIATITULOS),
                'CONPLANESTUDIO' => $this->generateBool($request->CONPLANESTUDIO),
            ]
        );

        return redirect()->route('convalidaciones.index')
            ->with('success', 'Convalidacion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convalidacion  $Convalidacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($CONCODIGO)
    {
        $convalidaciones = Convalidacion::findOrFail($CONCODIGO);
        $convalidaciones->delete();

        return redirect()->route('convalidaciones.index')
            ->with('success', 'Convalidacion deleted successfully');
    }
}
