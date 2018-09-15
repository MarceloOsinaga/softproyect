@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-row-reverse">
            <a href="{{ route('backup.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Realizar Backup</a>
        </div>
        <div class="form-group">
            <label>Cargar Archivo SQL</label>
            <form enctype="multipart/form-data" action="{{route('backup.store')}}" method="POST">
                @csrf
                <input class="form-control" id="filesql" name="filesql" aria-describedby="fileHelp" type="file">
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cargar</button>
            </form>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card">
            <div class="card-body">
                    <div class="d-flex flex-row-reverse">
                            <a href="{{ route('backup.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Realizar Backup</a>
                    </div>
                <h4 class="card-title">Backup</h4>
                <label for="input-file-now">Cargar Archivo SQL</label>
                <form enctype="multipart/form-data" action="{{route('backup.store')}}" method="POST">
                    <input type="file" id="input-file-now" class="dropify" />
                    <br>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cargar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
