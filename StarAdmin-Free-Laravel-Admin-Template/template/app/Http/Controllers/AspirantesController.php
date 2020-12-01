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

        $categoria = $request->ASPGRADOACTUAL;
        $categoryValue = '';
        switch ($categoria) {
            case 'Cinturón Marrón':
                $categoryValue = 0;
                break;
            case 'Cinturón Negro':
                $categoryValue = 1;
                break;
            case 'Primer Dan':
                $categoryValue = 2;
                break;
            case 'Segundo Dan':
                $categoryValue = 3;
                break;
            case 'Tercer Dan':
                $categoryValue = 4;
                break;
            case 'Cuarto Dan':
                $categoryValue = 5;
                break;
            case 'Quinto Dan':
                $categoryValue = 6;
                break;
            case 'Sexto Dan':
                $categoryValue = 7;
                break;
            case 'Séptimo Dan':
                $categoryValue = 8;
                break;
            case 'Octavo Dan':
                $categoryValue = 9;
                break;
            case 'Noveno Dan':
                $categoryValue = 10;
                break;
            case 'Décimo Dan':
                $categoryValue = 11;
                break;
        }
        //dd($request);
        $date_now = date_create("now");
        $birthday = date_create($request->ASPFECHANACIMIENTO);
        $age = date_diff($date_now, $birthday)->y;
        //dd($age);
        if ($age < 18 && $categoryValue >= 3) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 21 && $categoryValue >= 4) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 30 && $categoryValue >= 5) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 40 && $categoryValue >= 6) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 45 && $categoryValue >= 7) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 50 && $categoryValue >= 8) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 55 && $categoryValue >= 9) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 60 && $categoryValue >= 10) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } elseif ($age < 65 && $categoryValue >= 11) {
            return redirect()->back()->with('error', 'No cumple con la edad necesaria para inscribirse en la categoría: ' . $categoria);
        } else {
            $aspirantes = Aspirante::create($request->all());


            return redirect()->route('aspirantes.index')
                ->with('success', 'Aspirante registrado con éxito.');
        }
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
            ->with('success', 'Aspirante actualizado con éxito');
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
            ->with('success', 'Aspirante eliminado con éxito');
    }
}
