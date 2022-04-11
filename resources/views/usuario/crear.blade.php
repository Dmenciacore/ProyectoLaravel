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
        <h1>Sistema CRUD EGS</h1><br/>
        <form method="post" action="{{url('/usuario')}}" enctype="multipart/form-data">
            @csrf
            @include('usuario.form',['modo'=>'Crear']);
        </form>
    </div>
    @endsection
  </body>
</html>