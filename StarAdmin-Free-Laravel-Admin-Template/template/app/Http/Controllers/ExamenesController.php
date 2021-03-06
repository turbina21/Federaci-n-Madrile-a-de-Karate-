<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Inscripcion;
use App\Aspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes = Examen::all();

        return view('pages.tables.examenes.index', compact('examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tables.examenes.create');
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
            'EXACODIGO' => 'bail|required|max:7',
            'EVECODIGO' => 'bail|required|max:7',
            'TRICODIGO' => 'bail|required|max:7',
            'EXACATEGORIA' => 'bail|required|',
            'EXAOBSERVACIONES' => 'bail|required',
        ]);


        $examenes = Examen::create(
            [
                'EXACODIGO' => $request->EXACODIGO,
                'EVECODIGO' => $request->EVECODIGO,
                'TRICODIGO' => $request->TRICODIGO,
                'EXACATEGORIA' => $request->EXACATEGORIA,
                'EXACALIFICACIONTOTAL' => $this->generateBool($request->EXACALIFICACIONTOTAL),
                'EXABLOQUECOMUN' => $this->generateBool($request->EXABLOQUECOMUN),
                'EXABLOQUEESPECIFICO' => $this->generateBool($request->EXABLOQUEESPECIFICO),
                'EXAOBSERVACIONES' => $request->EXAOBSERVACIONES,
            ]
        );



        return redirect()->route('examenes.index')
            ->with('success', 'Examen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $Examen
     * @return \Illuminate\Http\Response
     */
    public function show($EXACODIGO)
    {
        $examenes = Examen::findOrFail($EXACODIGO);
        return view('pages.tables.examenes.show', compact('examenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examen  $Examen
     * @return \Illuminate\Http\Response
     */
    public function edit($EXACODIGO)
    {
        $examenes = Examen::findOrFail($EXACODIGO);
        return view('pages.tables.examenes.edit', compact('examenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examen  $Examen
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

    


    public function update(Request $request, $EXACODIGO)
    {
        
        $request->validate([
            'EXACODIGO' => 'bail|required|max:7',
            'EVECODIGO' => 'bail|required|max:7',
            'TRICODIGO' => 'bail|required|max:7',
            'EXACATEGORIA' => 'bail|required|',
            'EXAOBSERVACIONES' => 'bail|required',
        ]);

        $examenes = Examen::findOrFail($EXACODIGO);
        
        $examenes->update(
            [
                'EXACODIGO' => $request->EXACODIGO,
                'EVECODIGO' => $request->EVECODIGO,
                'TRICODIGO' => $request->TRICODIGO,
                'EXACATEGORIA' => $request->EXACATEGORIA,
                'EXACALIFICACIONTOTAL' => $this->generateBool($request->EXACALIFICACIONTOTAL),
                'EXABLOQUECOMUN' => $this->generateBool($request->EXABLOQUECOMUN),
                'EXABLOQUEESPECIFICO' => $this->generateBool($request->EXABLOQUEESPECIFICO),
                'EXAOBSERVACIONES' => $request->EXAOBSERVACIONES,
            ]
        );

        if($request->EXACALIFICACIONTOTAL ){
            $inscripcion = DB::table('inscripcions')->where('EXACODIGO', $request->EXACODIGO)->get();
            $inscripcion2= Inscripcion::findOrFail($inscripcion[0]->INSCODIGO);
            $aspiranteID = DB::table('aspirantes')->select('ASPCEDULA')->where('ASPCEDULA', $inscripcion[0]->ASPCEDULA)->get();
            $aspirante= Aspirante::findOrFail($aspiranteID[0]->ASPCEDULA);
            $currentDateTime = date('Y-m-d');
            $aspirante->update(
                [
                    'ASPGRADOACTUAL' => $inscripcion[0]->INSGRADO,
                    'ASPFECHAGRADOACTUAL' => $currentDateTime,
                ]
            );
        }
        
        return redirect()->route('examenes.index')
            ->with('success', 'Examen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examen  $Examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($EXACODIGO)
    {
        $examenes = Examen::findOrFail($EXACODIGO);
        $examenes->delete();

        return redirect()->route('examenes.index')
            ->with('success', 'Examen deleted successfully');
    }
}
