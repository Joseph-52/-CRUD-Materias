<?php

namespace App\Http\Controllers;

use App\Models\DatosMateria;
use Illuminate\Http\Request;

class DatosMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosMateria = DatosMateria::all();

        return view('index_materias')->with([
            'DatosMateria' => $datosMateria,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('New-Materia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $DatMat = new DatosMateria();
        $DatMat->nombre = $request->nombre;
        $DatMat->profesor = $request->profesor;
        $DatMat->creditos = $request->creditos;
        $DatMat->save();

        return redirect()->route('Datos-Materia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DatosMateria $datosMateria)
    {
        return view('detalles', compact('datosMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DatosMateria $datosMateria)
    {
        return view('editar', compact('datosMateria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DatosMateria $datosMateria)
    {
        $datosMateria->nombre = $request->nombre;
        $datosMateria->profesor = $request->profesor;
        $datosMateria->creditos = $request->creditos;
        $datosMateria->save();

        return redirect()->route('Datos-Materia.show', $datosMateria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DatosMateria $datosMateria)
    {
        $datosMateria->delete();

        return redirect()->route('Datos-Materia.index', $datosMateria);
    }
}
