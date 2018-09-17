<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $contratos = Contrato::orderBy('id')->paginate("10");
        return view('contrato.index', compact('contratos'));
       //return $tipocontratos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos = contrato::orderBy('id')->paginate("10");
        $empleados = empleado::select('*')->get();
        $tipoContratos = Tipocontrato::select('*')->get();
        return view('contrato.create')->with('empleados',$empleados)->with('tipoContratos',$tipoContratos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrato = new contrato;
        $contrato->fill($request->all());
        $contrato->save();
        return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$contrato = Contrato::find($id);
        //$tipoContratos= Tipocontrato::all()
        //return view('contrato.show')->with('tipocontratos',$tipocontratos)->with('contrato',$contrato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contrato = contrato::find($id);
        $contrato->fill($request->all());
        $contrato->save();
        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
