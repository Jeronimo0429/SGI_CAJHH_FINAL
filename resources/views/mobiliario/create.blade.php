@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Agregar Inmueble</h4>
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
{!!Form::open(array('url'=>'mobiliario','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="serial">Serial</label>
            <input type="text" name="serial"
id="serial" class="form-control"
            placeholder="Digite el serial del inmueble">
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control"
placeholder="Digite el nombre del inmueble ">
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="valor">Valor</label>
        <input type="double" name="valor" id="valor" class="form-control"
placeholder="Valor del inmueble">
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" class="form-control"
placeholder="Estado del inmueble">
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="estado">Propietario</label>
        <input type="text" name="propietario" id="propietario" class="form-control"
placeholder="Propietario del inmueble">
        </div>
    </div>
    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fechaAquisicion">Fecha de Aquisición</label>
        <input type="date" name="fechaAdquisicion" id="fechaAdquisicion" class="form-control"
placeholder="Fecha de Aquisición">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fechaSalida">Fecha de Salida</label>
        <input type="date" name="fechaSalida" id="fechaSalida" class="form-control"
placeholder="Fecha de Salida">
        </div>
    </div>

    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="comentarios">Comentarios</label>
        <input type="text" name="comentarios" id="comentarios" class="form-control"
placeholder="Comentarios">
        </div>
    </div>

    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Opciones">Opciones</label>
        <input type="text" name="Opciones" id="Opciones" class="form-control"
placeholder="Opciones">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
        <a class="btn btn-info" type="reset" href="{{url('mobiliario')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection