<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use App\Requisito;
use App\Convalidacion;
use App\Aspirante;
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
    public function asignValueGrado($grado)
    {

        $categoryValue = '';
        switch ($grado) {
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
        return $categoryValue;
    }
    public function asignGradoValue($grado)
    {

        $categoryValue = '';
        switch ($grado) {
            case 0:
                $categoryValue = 'Cinturón Marrón';
                break;
            case 1:
                $categoryValue = 'Cinturón Negro';
                break;
            case 2:
                $categoryValue = 'Primer Dan';
                break;
            case 3:
                $categoryValue = 'Segundo Dan';
                break;
            case 4:
                $categoryValue = 'Tercer Dan';
                break;
            case 5:
                $categoryValue = 'Cuarto Dan';
                break;
            case 6:
                $categoryValue = 'Quinto Dan';
                break;
            case 7:
                $categoryValue = 'Sexto Dan';
                break;
            case 8:
                $categoryValue = 'Séptimo Dan';
                break;
            case 9:
                $categoryValue = 'Octavo Dan';
                break;
            case 10:
                $categoryValue = 'Noveno Dan';
                break;
            case 11:
                $categoryValue = 'Décimo Dan';
                break;
        }
        return $categoryValue;
    }
    public function store(Request $request)
    {
        $request->validate([
            'INSCODIGO' => 'bail|required|max:7',
            'EXACODIGO' => 'bail|required|max:7',
            'REQCODIGO' => 'bail|max:7|nullable',
            'CONCODIGO' => 'bail|max:7|nullable',
            'ASPCEDULA' => 'bail|required|max:13',
            'CASCODIGO' => 'bail|max:7|nullable',
            'INSFECHA' => 'bail|required',
            'INSGRADO' => 'bail|required|max:20',
        ]);

        if ($request->REQCODIGO) {

            $requisitos = Requisito::findOrFail($request->REQCODIGO);

            if ($requisitos->REQFOTOCOPIACARNET && $requisitos->REQFOTOCOPIACEDULA && $requisitos->REQFOTOGRAFIAS && $requisitos->REQSOLICITUD && $requisitos->REQTRABAJO) {

                $aspirante = Aspirante::findOrFail($request->ASPCEDULA);
                if ($this->asignValueGrado($request->INSGRADO) == ($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1)) {
                    $inscripciones = Inscripcion::create($request->all());
                    return redirect()->route('inscripciones.index')
                        ->with('success', 'Inscripción creada con éxito.');
                }else{
                    return redirect()->back()->with('error', 'Debe inscribirse en la categoría: '. $this->asignGradoValue($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1));
                }
            } else {
                return redirect()->back()->with('error', 'No cumple con todos los requisitos administrativos necesarios para generar la inscripción');
            }
        } elseif ($request->CONCODIGO) {
            $convalidaciones = Convalidacion::findOrFail($request->CONCODIGO);

            if ($convalidaciones->CONCURRICULUMVISADO && $convalidaciones->CONACREDITACION && $convalidaciones->CONCOPIATITULOS && $convalidaciones->CONPLANESTUDIO) {
                $aspirante = Aspirante::findOrFail($request->ASPCEDULA);
                if ($this->asignValueGrado($request->INSGRADO) == $this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1) {
                $inscripciones = Inscripcion::create($request->all());
                return redirect()->route('inscripciones.index')
                    ->with('success', 'Inscripción creada con éxito.');
                }else{
                    return redirect()->back()->with('error', 'Debe inscribirse en la categoría: ' . $this->asignGradoValue($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1));
                }
            } else {
                return redirect()->back()->with('error', 'No cumple con todos las convalidaciones necesarias para generar la inscripción');
            }
        } else {
            return redirect()->back()->with('error', 'No tiene requisitos ni convalidaciones');
        }
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
            'ASPCEDULA' => 'bail|required|max:13',
            'CASCODIGO' => 'bail|max:7|nullable',
            'INSFECHA' => 'bail|required',
            'INSGRADO' => 'bail|required|max:20',
        ]);

        $inscripciones = Inscripcion::findOrFail($ASPCEDULA);

        if ($request->REQCODIGO) {

            $requisitos = Requisito::findOrFail($request->REQCODIGO);

            if ($requisitos->REQFOTOCOPIACARNET && $requisitos->REQFOTOCOPIACEDULA && $requisitos->REQFOTOGRAFIAS && $requisitos->REQSOLICITUD && $requisitos->REQTRABAJO) {

                $aspirante = Aspirante::findOrFail($request->ASPCEDULA);
                if ($this->asignValueGrado($request->INSGRADO) == ($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1)) {
                    $inscripciones->update($request->all());
                    return redirect()->route('inscripciones.index')
                        ->with('success', 'Inscripción creada con éxito.');
                }else{
                    return redirect()->back()->with('error', 'Debe inscribirse en la categoría: '. $this->asignGradoValue($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1));
                }
            } else {
                return redirect()->back()->with('error', 'No cumple con todos los requisitos administrativos necesarios para generar la inscripción');
            }
        } elseif ($request->CONCODIGO) {
            $convalidaciones = Convalidacion::findOrFail($request->CONCODIGO);

            if ($convalidaciones->CONCURRICULUMVISADO && $convalidaciones->CONACREDITACION && $convalidaciones->CONCOPIATITULOS && $convalidaciones->CONPLANESTUDIO) {
                $aspirante = Aspirante::findOrFail($request->ASPCEDULA);
                if ($this->asignValueGrado($request->INSGRADO) == $this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1) {
                    $inscripciones->update($request->all());
                return redirect()->route('inscripciones.index')
                    ->with('success', 'Inscripción creada con éxito.');
                }else{
                    return redirect()->back()->with('error', 'Debe inscribirse en la categoría: ' . $this->asignGradoValue($this->asignValueGrado($aspirante->ASPGRADOACTUAL)+1));
                }
            } else {
                return redirect()->back()->with('error', 'No cumple con todos las convalidaciones necesarias para generar la inscripción');
            }
        } else {
            return redirect()->back()->with('error', 'No tiene requisitos ni convalidaciones');
        }
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
