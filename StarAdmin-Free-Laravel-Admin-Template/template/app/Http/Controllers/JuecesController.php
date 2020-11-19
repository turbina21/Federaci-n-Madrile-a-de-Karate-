<?php

namespace App\Http\Controllers;

use App\Juez;
use Illuminate\Http\Request;

class JuecesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jueces = Juez::all();

        return view('pages.tables.jueces.index', compact('jueces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.jueces.create');
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
            'JUECEDULA' => 'bail|required|max:7',
            'TRICODIGO' => 'bail|required|max:7',
            'JUENOMBRE' => 'bail|required|max:50',
        ]);


        $jueces = Juez::create(
            [
                'JUECEDULA' => $request->JUECEDULA,
                'TRICODIGO' => $request->TRICODIGO,
                'JUENOMBRE' => $request->JUENOMBRE,
                'JUEDIPLOMA' => $this->generateBool($request->JUEDIPLOMA),
            ]
        );



        return redirect()->route('jueces.index')
            ->with('success', 'Juez created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Juez  $Juez
     * @return \Illuminate\Http\Response
     */
    public function show($JUECEDULA)
    {
        $jueces = Juez::findOrFail($JUECEDULA);
        return view('pages.tables.jueces.show', compact('jueces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juez  $Juez
     * @return \Illuminate\Http\Response
     */
    public function edit($JUECEDULA)
    {
        $jueces = Juez::findOrFail($JUECEDULA);
        return view('pages.tables.jueces.edit', compact('jueces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juez  $Juez
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

    public function update(Request $request, $JUECEDULA)
    {

        $request->validate([
            'JUECEDULA' => 'bail|required|max:7',
            'TRICODIGO' => 'bail|required|max:7',
            'JUENOMBRE' => 'bail|required|max:50',
        ]);

        $jueces = Juez::findOrFail($JUECEDULA);

        $jueces->update(
            [
                'JUECEDULA' => $request->JUECEDULA,
                'TRICODIGO' => $request->TRICODIGO,
                'JUENOMBRE' => $request->JUENOMBRE,
                'JUEDIPLOMA' => $this->generateBool($request->JUEDIPLOMA),
            ]
        );

        return redirect()->route('jueces.index')
            ->with('success', 'Juez updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juez  $Juez
     * @return \Illuminate\Http\Response
     */
    public function destroy($JUECEDULA)
    {
        $jueces = Juez::findOrFail($JUECEDULA);
        $jueces->delete();

        return redirect()->route('jueces.index')
            ->with('success', 'Juez deleted successfully');
    }
}
