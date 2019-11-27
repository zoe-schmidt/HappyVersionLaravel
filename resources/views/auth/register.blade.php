@extends('plantilla')

@section('main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/registrate.css">
  </head>
  <body>
    <div class="container">
      <div class="registro">
            <h1>Registrate!</h1>
          <form class="registro" action="/register" method="POST" enctype="multipart/form-data">
            @csrf
              <label for="nombre">
                  <p>Nombre:</p>
                  <input id="nombre" type="text" name="nombre" value="{{old('nombre')}}">
                  <br>
                  @error('nombre')
                  <small class="error">{{$message}}</small>
                  @enderror
              </label>
            <br>
            <br>
              <label for="apellido">
                <p>Apellido:</p>
                <input id="apellido" type="text" name="apellido" value="">
                <br>
                @error("apellido")
                <small class="error">{{$message}}</small>
                @enderror
              </label>
            <br>
            <br>
              <label for="email">
                <p>Email: </p>
                <input type="email" name="email" value="{{old('email')}}">
                <br>
                @error('email')
                <small class="error">{{$message}}</small>
                @enderror
              </label>
            <br>
            <br>
              <label for="password">
                <p>Contraseña:</p>
                <input type="password" name="password" value="">
                <br>
                @error('password')
                <small class="error">{{$message}}</small>
                @enderror
              </label>
            <br>
            <br>
              <label for="confirmarPassword">
              <p>Repetí tu contraseña:</p>
              <input type="password" name="confirmarPassword" value="">
              <br>
              @error('password')
                <small class="error">{{$message}}</small>
                @enderror
              </label>

            <br>
            <br>

              <input type="file" name="avatar" value="">
             
              </small>


          <div class="botones">
            <p>
              <button id="boton-enviar"type="submit" name="button">Enviar</button>
              <button id="boton-borrar"type="reset" name="reset">Borrar</button>
            </p>
            </div>
            </form>
          </div>
    </div>
  </body>
</html>

@endsection
