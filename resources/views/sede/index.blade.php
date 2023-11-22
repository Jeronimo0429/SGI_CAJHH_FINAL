@extends('layout.plantilla')
@section('contenido')


<div class="row">
    <div class="col-md-9">
        <a href="{{url('sede/create')}}" class="pull-right">
            <button class="btn btn-success">Agregar sede</button> </a>
        <a href="{{url('imprimirsedes')}}" class="pull-right">
            <button class="btn btn-success"><i class="fas fa-file-pdf"></i> Imprimir sedes</button> </a>
    </div>
</div>
<center>
<p>Gestión de sedes</p>
</center>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Colegio</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Teléfono</th>

            </thead>
            <tbody>
                @foreach($sede as $sed)
                <tr>
                    <td>{{ $sed->id }}</td>
                    <td>{{ $sed->Nombre }}</td>
                    <td>{{ $sed->Colegio }}</td>
                    <td>{{ $sed->Direccion }}</td>
                    <td>{{ $sed->Correo }}</td>
                    <td>{{ $sed->Telefono }}</td>
                    <td>

                        <a href="{{URL::action('App\Http\Controllers\SedeController@edit',$sed->id)}}" class="edit"
                            title="Edit" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i></a>

                        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$sed->id}}" class="delete"
                            title="Delete" data-toggle="tooltip">
                            <i class="material-icons">&#xE872;</i>
                        </a>
                    </td>
                </tr>
                @include('sede.modal')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection