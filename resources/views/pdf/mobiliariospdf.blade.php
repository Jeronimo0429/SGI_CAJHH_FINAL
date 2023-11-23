<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informe de Inmuebles </title>
    <!-- Theme style -->
<link rel="stylesheet"
href="{{public_path('dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="container">
        <div class="row">
        <div class="col">
        <img src="{{public_path('img/logoopdf.jpg')}}" alt="" width='140px' class="logopdf">
        <img src="{{public_path('img/fundacion.jpg')}}" alt="" width='115px' class="fundacionpdf">
    </div>
        <style>
            .logopdf {
                position: relative;
                top: -3%;
                left: -25%;
            }
        </style>
        <style>
            .fundacionpdf {
                position: relative;
                top: -3%;
                right: -73%;
            }
        </style>
    </div>
        <div class="col-md-12 col-xs-12">
         <h4 class="text-center">Colegio Ana Julia Holguin de Hurtado</h4>
         <h2 class="text-center">Mobiliarios</h2>
        </div>

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
      <tbody>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>