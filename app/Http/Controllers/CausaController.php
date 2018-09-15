<?php

namespace App\Http\Controllers;

use App\Causa;
use Illuminate\Http\Request;

class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causas = causa::orderBy('id', 'DESC')->paginate();
        return view('causa.index', compact('causas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('causa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $causa = new causa;
        $causa->nombre  = $request->nombre;
        $causa->descripcion = $request->descripcion;
        $causa->save();
        return redirect()->route('causas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\causa  $causa
     * @return \Illuminate\Http\Response
     */
    public function show(causa $causa)
    {
        $causa = causa::find($id);
        return view('causa.show', compact('causa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\causa  $causa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $causa = causa::find($id);
        return view('causa.edit', compact('causa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\causa  $causa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $causa = causa::find($id);
        $causa->nombre  = $request->nombre;
        $causa->descripcion = $request->descripcion;
        $causa->save();
        return redirect()->route('causas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\causa  $causa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $causa = causa::find($id);
        $causa->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
