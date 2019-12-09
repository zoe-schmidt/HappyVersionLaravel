@extends("plantilla")
@section("main")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/actividades.css">
    <title></title>
  </head>
  <body>

    <div class="titulo">
    <h1>ACTIVIDADES</h1>
    </div>

  </section>
  <div class="busqueda">
    <div class="lupa">
      <i class="fas fa-search"></i>
    </div>
    <form>
      <input type="search" class="buscar" placeholder="Descubrí tu Próxima Aventura">
    </form>
  </div>

    <div class="productos">
      <div class="producto1">
        <div class="imagen-producto1">
          <img id="salto-en-paracaidas" src="imagenes/salto-en-paracaidas.jpg" alt="salto-en-paracaidas">
        </div>
          <div class="titulo-descripcion-producto">
          <br>
          <p class="titulo-producto" >Salto en paracaidas!</p>
          <br>
          <p class="descripcion-producto">Desde Tandil salta al vacio! Animate a vivir esta nueva experiencia! </p>
          <br>
          </div>
          <div class="ver-mas">
              <a href=""><p>VER MÁS</p></a>
            </div>
        </div>
        <div class="producto2">
          <div class="imagen-producto2">
            <img id="dia-de-spa-en-pareja" src="imagenes/dia-de-spa-en-pareja.jpg" alt="dia-de-spa-en-pareja">
          </div>
            <div class="titulo-descripcion-producto">
            <br>
            <p class="titulo-producto" >Dia de Spa en Pareja</p>
            <br>
            <p class="descripcion-producto">Tomate un día con tu pareja, relajense y disfruten!  </p>
            <br>
            </div>
            <div class="ver-mas">
                <a href=""><p>VER MÁS</p></a>
              </div>
          </div>
      </div>
  </body>
</html>

@endsection
