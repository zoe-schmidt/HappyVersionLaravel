@extends("plantilla")
@section("main")

<link rel="stylesheet" href="/css/viajes.css">
<div class="contenedor">



  <main>

    </section>
    <div class="busqueda">
      <div class="lupa">
        <i class="fas fa-search"></i>
      </div>
      <form>
        <input type="search" class="buscar" placeholder="Descubrí tu Próxima Aventura">
      </form>
    </div>
    <div class="happy">
      <h3 class="happy">Happy</h3>
    </div>

    <div class="productos">
      <div class="producto1">
        <div class="imagen-producto1">
          <img id="termas-colon" src="imagenes/termas_1.png" alt="termas-colon">
        </div>
        <div class="corazon">
         <i class="fas fa-heart"></i>
         </div>
        <div class="titulo-Descripcion-producto6">
        <section id="producto1">
          <article class="producto1">
              <div class="titulo-descripcion-producto1">
                <br>
              <p class="titulo-producto">Finde Semana en las termas!</p>
              <br>
              <p class="descripcion-producto">Disfruta de un fin de semana en las Termas de Colon!</p>
              <br>
              </div>
              <div class="ver-mas">
                  <a href=""><p>VER MÁS</p></a>
                </div>
          </article>
       </section>
       </div>
      </div>

      <div class="producto2">
        <div class="imagen-producto2">
          <img id="cataratas-del-iguazu" src="imagenes/cataratas_1.png" alt="cataratas-del-iguazu">
        </div>
        <div class="corazon">
      <i class="fas fa-heart"></i>
      </div>
        <div class="titulo-Descripcion-producto2">
        <section id="producto2">
          <article class="producto2">
              <div class="titulo-descripcion-producto2">
                <br>
              <p class="titulo-producto">Una semana en las Cataratas del Iguazú</p>
              <br>
              <p class="descripcion-producto">Disfruta de una semana conociendo una de las maravillas del mundo! </p>
              </div>
              <div class="ver-mas">
                  <a href=""><p>VER MÁS</p></a>
                </div>
          </article>
       </div>
      </div>
    </div>
  </div>

  </main>

</div>

@endsection
