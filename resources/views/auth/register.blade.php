@extends('plantilla')

@section('main')

    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/registrate.css">
 
    <div class="container">
      <div class="registro">
            <h1>Registrate!</h1>
          <form class="registro" action="/register" method="POST" enctype="multipart/form-data">
            @csrf
              <label for="nombre">
                  <p>Nombre:</p>
                  <input id="nombre" type="text" name="nombre" value="{{old('nombre')}}">
                  <br>

                  <small class="error">
                    @error('nombre')
                    {{$message}}
                    @enderror
                  </small>

              </label>
            <br>
            <br>
              <label for="apellido">
                <p>Apellido:</p>
                <input id="apellido" type="text" name="apellido" value="{{old('apellido')}}">
                <br>

                <small class="error">
                  @error('apellido')
                  {{$message}}
                  @enderror
                </small>

              </label>
            <br>
            <br>
              <label for="email">
                <p>Email: </p>
                <input type="email" name="email" value="{{old('email')}}">
                <br>

                <small class="error">
                  @error('email')
                  {{$message}}
                  @enderror
                </small>

              </label>
            <br>
            <br>
              <label for="password">
                <p>Contraseña:</p>
                <input type="password" name="password" value="">
                <br>

                <small class="error">
                  @error('password')
                  {{$message}}
                  @enderror
                </small>

              </label>
            <br>
            <br>
              <label for="confirmarPassword">
              <p>Repetí tu contraseña:</p>
              <input type="password" name="password_confirmation" value="">
              <br>

                  <small class="error">
                    @error('password_confirmation')
                      {{$message}}
                    @enderror
                  </small>

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
<script src="/js/formulario-registro.js"></script>
@endsection
