

@extends("plantilla")

@section("main")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
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

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/imagenes/cataratas_1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/imagenes/hamburguesa.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/imagenes/gastronomia.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="productos">
          <div class="producto">
            <div class="imagen-producto1">
              <img id="cena-de-sushi-para-dos" src="imagenes/SUSHI.png" alt="cena-de-sushi-para-dos">
            </div>
            <div class="corazon">
            <i class="fas fa-heart"></i>
            </div>
            <div class="titulo-Descripcion-Producto1">
          <section id="producto1">
            <article class="producto1">
              <div class="titulo-descripcion-producto1">
              <br>
              <p class="titulo-producto" >Cena de Sushi para dos</p>
              <br>
              <p class="descripcion-producto">Disfruta de una cena de sushi con tu pareja! Combo de piezas a elección! </p>
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
              <img id="salto-en-paracaidas" src="imagenes/parachute_1.png" alt="salto-en-paracaidas">
            </div>
            <div class="corazon">
            <i class="fas fa-heart"></i>
            </div>
            <div class="titulo-Descripcion-producto2">
            <section>
              <article class="producto2">
                <div class="titulo-descripcion-producto2">
                <br>
                <p class="titulo-producto">Salto en paracaidas</p>
                <br>
                <p class="descripcion-producto">Desde Tandil salta al vacio! Animate a vivir esta nueva experiencia!</p>
                <br>
                </div>
                <div class="ver-mas">
                    <a href=""><p>VER MÁS</p></a>
                  </div>
              </article>
            </section>
            </div>
          </div>

          <div class="producto3">
            <div class="imagen-producto3">
              <img id="dia-de-spa-en-pareja" src="imagenes/spa_2.png" alt="dia-de-spa-en-pareja">
            </div>
            <div class="corazon">
            <i class="fas fa-heart"></i>
            </div>
            <div class="titulo-Descripcion-producto3">
            <article class="producto3">
              <div class="titulo-descripcion-producto3">
              <br>
              <p class="titulo-producto">Dia de Spa en Pareja</p>
              <br>
              <p class="descripcion-producto">Tomate un día con tu pareja, relajense y disfruten! </p>
              <br>
              </div>
              <div class="ver-mas">
                  <a href=""><p>VER MÁS</p></a>
                </div>
            </article>
            </div>
          </div>
       </div>

       <div class="kits-en-oferta">
         <h4>Kits en Oferta!</h4>
       </div>

       <div class="productos">
         <div class="producto4">
           <div class="imagen-producto4">
             <img id="dia-en-temaiken" src="imagenes/mm_1.png" alt="dia-en-temaiken">
           </div>
           <div class="corazon">
            <i class="fas fa-heart"></i>
            </div>
           <div class="titulo-Descripcion-Producto4">
           <section id="producto4">
             <article class="producto4">
                 <div class="titulo-descripcion-producto4">
                  <br>
                 <p class="titulo-producto" >Paseo por temaiken!</p>
                 <br>
                 <p class="descripcion-producto">Disfruta de un día en familia en Temaiken! </p>
                 <br>
                 </div>
            </div>
            <div class="ver-mas">
                <a href=""><p>VER MÁS</p></a>
              </div>
             </article>
          </div>

          <div class="productos">
            <div class="producto5">
              <div class="imagen-producto4">
                <img id="cataratas-del-iguazu" src="imagenes/cataratas_1.png" alt="cataratas-del-iguazu">
              </div>
              <div class="corazon">
            <i class="fas fa-heart"></i>
            </div>
              <div class="titulo-Descripcion-producto5">
              <section id="producto5">
                <article class="producto5">
                    <div class="titulo-descripcion-producto5">
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

             <div class="productos">
               <div class="producto6">
                 <div class="imagen-producto6">
                   <img id="termas-colon" src="imagenes/termas_1.png" alt="termas-colon">
                 </div>
                 <div class="corazon">
                  <i class="fas fa-heart"></i>
                  </div>
                 <div class="titulo-Descripcion-producto6">
                 <section id="producto6">
                   <article class="producto6">
                       <div class="titulo-descripcion-producto6">
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

      </main>

 </div>
@endsection