@extends('layout.plantilla')
@section('contenido')
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <h4>Ingresar sede</h4>
    
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
{!!Form::open(array('url'=>'sede','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
</div>

<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" class="form-control"
placeholder="Nombre Completo">
</div>
</div>

<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
    <label for="colegio">Colegio</label>
    <input type="text" name="colegio" id="colegio" class="form-control"
    placeholder="Nombre del colegio">
    </div>
    </div>
    
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
    <label for="direccion">Dirección</label>
<input type="text" name="direccion" id="direccion" class="form-control"
placeholder="Dirección">
</div>
</div>

<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="correo">Email</label>
<input type="text" name="correo" id="correo" class="form-control"
placeholder="Correo electrónico">
</div>
</div>

<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="telefono">Teléfono</label>
<input type="text" name="telefono" id="telefono" class="form-control"
placeholder="Teléfono">
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
<a class="btn btn-info" type="reset" href="{{url('sede')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>

{!!Form::close()!!}
@endsection
