<?php

namespace App\Http\Controllers;

use App\Requisito;
use Illuminate\Http\Request;

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitos = Requisito::all();

        return view('pages.tables.requisitos.index', compact('requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.requisitos.create');
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
            'REQCODIGO' => 'bail|required|max:7',
        ]);


        $requisitos = Requisito::create(
            [
                'REQCODIGO' => $request->REQCODIGO,
                'REQFOTOCOPIACARNET' => $this->generateBool($request->REQFOTOCOPIACARNET),
                'REQFOTOCOPIACEDULA' => $this->generateBool($request->REQFOTOCOPIACEDULA),
                'REQFOTOGRAFIAS' => $this->generateBool($request->REQFOTOGRAFIAS),
                'REQSOLICITUD' => $this->generateBool($request->REQSOLICITUD),
                'REQTRABAJO' => $this->generateBool($request->REQTRABAJO),
            ]
        );



        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requisito  $Requisito
     * @return \Illuminate\Http\Response
     */
    public function show($REQCODIGO)
    {
        $requisitos = Requisito::findOrFail($REQCODIGO);
        return view('pages.tables.requisitos.show', compact('requisitos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requisito  $Requisito
     * @return \Illuminate\Http\Response
     */
    public function edit($REQCODIGO)
    {
        $requisitos = Requisito::findOrFail($REQCODIGO);
        return view('pages.tables.requisitos.edit', compact('requisitos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requisito  $Requisito
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

    public function update(Request $request, $REQCODIGO)
    {

        $request->validate([
            'REQCODIGO' => 'bail|required|max:7',
        ]);

        $requisitos = Requisito::findOrFail($REQCODIGO);

        $requisitos->update(
            [
                'REQCODIGO' => $request->REQCODIGO,
                'REQFOTOCOPIACARNET' => $this->generateBool($request->REQFOTOCOPIACARNET),
                'REQFOTOCOPIACEDULA' => $this->generateBool($request->REQFOTOCOPIACEDULA),
                'REQFOTOGRAFIAS' => $this->generateBool($request->REQFOTOGRAFIAS),
                'REQSOLICITUD' => $this->generateBool($request->REQSOLICITUD),
                'REQTRABAJO' => $this->generateBool($request->REQTRABAJO),
            ]
        );

        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requisito  $Requisito
     * @return \Illuminate\Http\Response
     */
    public function destroy($REQCODIGO)
    {
        $requisitos = Requisito::findOrFail($REQCODIGO);
        $requisitos->delete();

        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito deleted successfully');
    }
}
