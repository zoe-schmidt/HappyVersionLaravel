

@extends('plantilla')

@section('main')
<link rel="stylesheet" href="/css/login.css">
<div class="formulario-ingreso">
    <form class="formulario-ingreso" id="formulario-ingreso" action='/login' method="post">
                                            {{--{{route('login')}}/*  --}}
      @csrf
      <h1>Ingresá</h1>
      <div class="formulario">
      <label for="email">
        <p>Usuario:</p>
        <input type="text" name="email" value="" id="email" placeholder="Complete el campo">
        <br>
        @error('email')
        <small class="error">{{$message}}</small>
        @enderror
      </label>
      <br>
      <br>
      <label for="password">
        <p>Contraseña:</p>
        <input type="password" name="password" value="" id="password" placeholder="Complete el campo">
        <br>
        @error('password')
        <small class="error">{{$message}}</small>
        @enderror
      </label>
      <br>

       <input type="checkbox" name="recordarme" id="recordarme" value="" checked>
       <label for="recordar">Recordarme</label>
       <small class= "error"><?= $errores["recordarme"][0] ?? ""?></small>
      <br>
      <br>
      <p>
        <button type="submit" name="submit">Enviar</button>
      </p>

      <div class= "texto-nuevo">
        <p>¿Eres nuevo?
          <br>
          <a href="registrate.php">Registrate</a></p>
      </div>

      </div>
    </form>
  </div>
 <script src="/js/formulario-login.js"></script>
@endsection
