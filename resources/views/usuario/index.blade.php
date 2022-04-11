<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto EGS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <br />

        @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <p>{{ Session::get('mensaje') }}</p>
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>            
        </div><br /><br>
        @endif
        
    <a href=" {{ url('usuario/create') }} " class="btn btn-primary">Registrar Nuevo Usuario</a>
    <br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tipo de Documento</th>
        <th>Número Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Ciudad</th>
        <th>Email</th>
        <th>Usuario</th>
        <th>Contraseña</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($usuarios as $usuario)
    @php
    $date=date('Y-m-d', $usuario['date']);
    @endphp
    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->tipoDocumento }}</td>
        <td>{{ $usuario->cedula }}</td>
        <td>{{ $usuario->nombre }}</td>
        <td>{{ $usuario->apellido }}</td>
        <td>{{ $usuario->fechaNacimiento }}</td>
        <td>{{ $usuario->ciudadNacimiento }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->usuario }}</td>
        <td>{{ $usuario->password }}</td>
        
        <td><a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning">Editar</a></td>
        <td>
        <form action="{{ url('/usuario/'.$usuario->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input name="_method" type="hidden" value="Eliminar">
            <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
     </div>
    @endsection
    </body>
</html>