@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar Activo</h4>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('App\Http\Controllers\InmuebleController@update', $mobiliario->id),'method'=>'patch'))}}

<div class="row g-3">

 <div class="col-md-4">
    <label for="serial" class="form-label">Serial</label>
    <input type="text" name="serial" id="serial" class="form-control"
            value="{{$mobiliario->serial}}">
 </div>

 <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control"
            value="{{$mobiliario->nombre}}">
 </div>

 <div class="col-6">
    <label for="valor" class="form-label">Valor</label>
    <input type="double" name="valor" id="valor" class="form-control"
            value="{{$mobiliario->valor}}">

 <div class="col-4">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" name="estado" id="estado" class="form-control"
            value="{{$mobiliario->estado}}">
    </div>

    <div class="col-4">
    <label for="propietario" class="form-label">Propietario</label>
    <input type="text" name="propietario" id="propietario" class="form-control"
            value="{{$mobiliario->propietario}}">
    </div>
    
    </div>
    <div class="col-md-6">
        <label for="fechaAdquisicion" class="form-label">Fecha de Adquisición</label>
        <input type="date" name="fechaAdquisicion" id="fechaAdquisicion" class="form-control"
            value="{{$mobiliario->fechaAdquisicion}}">

    </div>
    <div class="col-md-6">
        <label for="fechaSalida" class="form-label">Fecha de Salida</label>
        <input type="date" name="fechaSalida" id="fechaSalida" class="form-control"
            value="{{$mobiliario->fechaSalida}}">
    </div>

    <div class="col-4">
    <label for="comentarios" class="form-label">Comentarios</label>
    <input type="text" name="comentarios" id="comentarios" class="form-control"
            value="{{$mobiliario->comentarios}}">
    </div>

    <div class="col-4">
    <label for="opciones" class="form-label">Opciones</label>
    <input type="text" name="opciones" id="opciones" class="form-control"
            value="{{$mobiliario->opciones}}">
    </div>

    <div class="col-12">
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar
    </button>
<a class="btn btn-info" type="reset" href="{{url('mobiliario')}}">
    <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection