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
          <form class="registro" action="registrate.php" method="POST" enctype="multipart/form-data">
              <label for="nombre">
                  <p>Nombre:</p>
                  <input id="nombre" type="text" name="nombre" value="">
                  <br>
                  <small class="error"><?= $errores['nombre'] ?? '' ?></small>
              </label>
            <br>
            <br>
              <label for="apellido">
                <p>Apellido:</p>
                <input id="apellido" type="text" name="apellido" value="">
                <br>
                <span class="error"><?= $errores['apellido'] ?? '' ?></span>
              </label>
            <br>
            <br>
              <label for="email">
                <p>Email: </p>
                <input type="email" name="email" value="">
                <br>
                <small class="error"><?= $errores['email'] ?? '' ?></small>
                <small class="error"><?= $errores['email'] ?? '' ?></small>
              </label>
            <br>
            <br>
              <label for="password">
                <p>Contraseña:</p>
                <input type="password" name="password" value="">
                <br>
                <small class="error"><?= $errores['password'] ?? '' ?></small>
              </label>
            <br>
            <br>
              <label for="confirmarPassword">
              <p>Repetí tu contraseña:</p>
              <input type="password" name="confirmarPassword" value="">
              <br>
              <small class="error">
                <?= $errores['pas<?=$nombre?>sword'][0] ?? '' ?> <br>
                  <?= $errores['password'][1] ?? '' ?>
                  <?= $errores['password'][2] ?? '' ?>
            </small>
              </label>

            <br>
            <br>

              <input type="file" name="avatar" value="">
              <small class="error"><?=$errores["avatar"]["error"]?? ""?>
              <?=$errores["avatar"]["error"]?? "" ?>
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
