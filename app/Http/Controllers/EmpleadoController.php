<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\Sindicato;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::with('sindicato','departamento')->paginate("10");
        $sindicatos = Sindicato::all();
        return view('empleado.index', compact('empleados'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipocontrato = new Tipocontrato;
        $tipocontrato->nombre  = $request->nombre;
        $tipocontrato->descripcion = $request->descripcion;
        $tipocontrato->save();
        return redirect()->route('tipocontratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        $tipocontrato = Tipocontrato::find($id);
        return view('tipocontrato.show', compact('tipocontrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $tipocontrato = Tipocontrato::find($id);
        return view('tipocontrato.edit', compact('tipocontrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $tipocontrato = Tipocontrato::find($id);
        $tipocontrato->nombre  = $request->nombre;
        $tipocontrato->descripcion = $request->descripcion;
        $tipocontrato->save();
        return redirect()->route('tipocontratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $tipocontrato = Tipocontrato::find($id);
        $tipocontrato->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
