@extends("plantilla")
@section("main")

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/perfil.css">

    <title>perfil</title>
  </head>
  <body>
  <div class="contenedor">


      <main>
        <div class="titulo">
          <h1>Mi Perfil</h1>
        </div>
        <div>
          <div class="contenedor-avatar">
            <img src="/storage/{{auth::user()->avatar}}" alt="imagen-avatar">
          
          </div>

        </div>
        <div class="padre-datos">

          <div class="datos">
              <p> Nombre:{{auth::user()->nombre}}</p>
              <br>
              <p>Email:{{auth::user()->email}}</p>
              <br>
              </div>
        </div>
      </main>

  </div>
  </body>
</html>

@endsection
