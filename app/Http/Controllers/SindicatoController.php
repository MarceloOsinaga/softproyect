<?php

namespace App\Http\Controllers;

use App\Sindicato;
use Illuminate\Http\Request;

class SindicatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sindicatos = Sindicato::orderBy('id', 'DESC')->paginate();
        return view('sindicato.index', compact('sindicatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sindicato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $sindicato = new Sindicato;
        $sindicato->nombre  = $request->nombre;
        $sindicato->descripcion = $request->descripcion;
        $sindicato->save();
        return redirect()->route('sindicatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sindicato  $sindicato
     * @return \Illuminate\Http\Response
     */
    public function show(Sindicato $sindicato)
    {
        $sindicato = Sindicato::find($id);
        return view('sindicato.show', compact('sindicato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sindicato  $sindicato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sindicato = Sindicato::find($id);
        return view('sindicato.edit', compact('sindicato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sindicato  $sindicato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $sindicato = Sindicato::find($id);
        $sindicato->nombre  = $request->nombre;
        $sindicato->descripcion = $request->descripcion;
        $sindicato->save();
        return redirect()->route('sindicatos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sindicato  $sindicato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sindicato = Sindicato::find($id);
        $sindicato->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
