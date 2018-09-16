@extends('layouts.admin')

@section('content')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">@yield('titulo')</h4>
                </div>
                    <div class="row">
                            <div class="col-lg-12">
                                    <div class="card-body">

                                        @yield('botonRegresar')

                                        <h3 class="card-title">Datos</h3>
                                        <div class="table-responsive">
                                            <table class="table color-table muted-table">
                                              @yield('contenidoTablas')
                                            </table>
                                            <hr>
                                            @yield('paginarTablas')
                                        @yield('botonNuevo')
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
@endsection