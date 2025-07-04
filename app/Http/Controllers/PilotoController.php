<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piloto;

class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //consulta clientes a la bdd
        $pilotos=Piloto::all();
        //renderizar la vista
        return view('pilotos.index',compact('pilotos'));

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pilotos.nuevo');



        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos=[
            'cedula'=>$request->cedula,
            'nombre'=>$request->nombre,
            'latitud1'=>$request->latitud1,
            'longitud1'=>$request->longitud1,
            'hora1'=>$request->hora1,


            'latitud2'=>$request->latitud2,
            'longitud2'=>$request->longitud2,
            'hora2'=>$request->hora2,


            'latitud3'=>$request->latitud3,
            'longitud3'=>$request->longitud3,
            'hora3'=>$request->hora3,

        
        ];
        Piloto::create($datos);
        return redirect()->route('pilotos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $piloto = Piloto::findOrFail($id);
        $piloto->delete();

        return redirect()->route('pilotos.index')->with('success', 'Predio eliminado correctamente.');

        //
    }
}
