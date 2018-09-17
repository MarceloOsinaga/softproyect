<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\Sindicato;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * visualisar el listado de los empleados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados =  Empleado::with('sindicato','departamento')->paginate("10");
        
        return view('empleado.index', compact('empleados'));
        return view('empleado.create', compact('empleados'));
        return redirect('',compact('empleados'));
    }

    /**
     * Crear nuevo registro de un empleado
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
        
    }

    /**
     * Almacenar un registro recien creado 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado;
        $empleado->nombre  = $request->nombre;
        $empleado->appaterno = $request->appaterno;
        $empleado->apmaterno  = $request->apmaterno;
        $empleado->cargo  = $request->cargo;
        $empleado->ci  = $request->ci;
        $empleado->direccion  = $request->direccion;
        $empleado->estadocivil  = $request->estadocivil;
        $empleado->fechanac  = $request->fechanac;
        $empleado->genero  = $request->genero;
        $empleado->nacionalidad  = $request->nacionalidad;
        $empleado->telefono  = $request->telefono;
        $empleado->id_sindicato  = $request->id_sindicato;
        $empleado->id_departamento  = $request->id_departamento;

        $empleado->save();
        return redirect()->route('empleados.index');

    }

    /**
     * Ver el detalle del perfil de un empleado
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Formulario para editar un empleado
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Almacenar un empleado Editado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado = new Empleado;
        $empleado->nombre  = $request->nombre;
        $empleado->appaterno = $request->appaterno;
        $empleado->apmaterno  = $request->apmaterno;
        $empleado->cargo  = $request->cargo;
        $empleado->ci  = $request->ci;
        $empleado->direccion  = $request->direccion;
        $empleado->estadocivil  = $request->estadocivil;
        $empleado->fechanac  = $request->fechanac;
        $empleado->genero  = $request->genero;
        $empleado->nacionalidad  = $request->nacionalidad;
        $empleado->telefono  = $request->telefono;
        $empleado->id_sindicato  = $request->id_sindicato;
        $empleado->id_departamento  = $request->id_departamento;

        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Emilinar un empleado 
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
