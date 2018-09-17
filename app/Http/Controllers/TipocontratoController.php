<?php

namespace App\Http\Controllers;

use App\Tipocontrato;
use Illuminate\Http\Request;

class TipocontratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipocontratos = Tipocontrato::orderBy('id')->paginate("10");
        return view('tipocontrato.index', compact('tipocontratos'));
       //return $tipocontratos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipocontrato.create');
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
     * @param  \App\Tipocontrato  $tipocontrato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipocontrato = Tipocontrato::find($id);
        return view('tipocontrato.show', compact('tipocontrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipocontrato  $tipocontrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipocontrato = Tipocontrato::find($id);
        return view('tipocontrato.edit', compact('tipocontrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipocontrato  $tipocontrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
     * @param  \App\Tipocontrato  $tipocontrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipocontrato = Tipocontrato::find($id);
        $tipocontrato->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
