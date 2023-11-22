@extends('layout.plantilla')

@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('mobiliario/create')}}" class="pull-right">
            <button class="btn btn-success">Agregar mobiliario</button> </a>
            <a href="{{url('imprimirmobiliarios')}}" class="pull-right">
                <button class="btn btn-success"> <i class="fas fa-file-pdf"> </i> Imprimir Inmuebles</button> </a>
</div></div>
<center>
<p>Gestión de Inmuebles</p>
</center> 
<div class="row">
        <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <th>ID</th>
        <th>Serial</th>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Estado</th>
        <th>Propietario</th>
        <th>fecha de Entrada</th>
        <th>fecha de Salida</th>
        <th>Comentarios</th>
        <th>Opciones</th>
      </thead>
      <tbody>
      @foreach($mobiliario as $mobil)
    <tr>
        <td>{{ $mobil->id }}</td>
        <td>{{ $mobil->serial }}</td>
        <td>{{ $mobil->nombre }}</td>
        <td>{{ $mobil->valor}}</td>
        <td>{{ $mobil->estado }}</td>
        <td>{{ $mobil->propietario }}</td>
        <td>{{ $mobil->fechaEntrada }}</td>
        <td>{{ $mobil->fechaSalida }}</td>
        <td>{{ $mobil->comentarios }}</td>
        <td>
        <a href="{{URL::action('App\Http\Controllers\InmuebleController@edit',$mobil->id)}}" class="edit" title="Edit" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i></a>
        
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$mobil->id}}" class="delete" title="Delete" data-toggle="tooltip">
            <i class="material-icons">&#xE872;</i>
        </a>
        </td>
        
    </tr>
    @include('mobiliario.modal')

@endforeach
</tbody> </table>
</div></div>
@endsection