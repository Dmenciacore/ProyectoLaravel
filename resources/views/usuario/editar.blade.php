<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto EGS  </title>
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
        <h2>Sistema CRUD EGS</h2><br/>
        <form method="post" action="{{ url('/usuario/'.$usuario->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}

            @include('usuario.form',['modo'=>'Editar']);
        </form>
    </div>
    @endsection
  </body>
</html>