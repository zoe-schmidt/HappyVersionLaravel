
@extends("plantilla")
@section("main")


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/gastronomia.css">
    <title></title>
  </head>
  <body>
    <div class="titulo">
       <h1>GASTRONOMIA</h1>
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
             <img id="cena-de-sushi-para-dos" src="imagenes/cena-de-sushi-para-dos.jpg" alt="cena-de-sushi-para-dos">
           </div>
             <div class="titulo-descripcion-producto">
             <br>
             <p class="titulo-producto" >Cena de Sushi para dos</p>
             <br>
             <p class="descripcion-producto">Disfruta de una cena de sushi con tu pareja! Combo de piezas a elección! </p>
             <br>
             </div>
             <div class="ver-mas">
                 <a href=""><p>VER MÁS</p></a>
               </div>
           </div>
           <div class="producto2">
             <div class="imagen-producto2">
               <img id="Combo hamburguesa" src="imagenes/hamburguesa.jpg" alt="hamburguesa">
             </div>
               <div class="titulo-descripcion-producto">
               <br>
               <p class="titulo-producto" >Combo: Hamburguesa y papas especiales</p>
               <br>
               <p class="descripcion-producto">Disfruta de una de las hambuerguesas mas reconocidas en Capital Federal </p>
               <br>
               </div>
               <div class="ver-mas">
                   <a href=""><p>VER MÁS</p></a>
                 </div>
             </div>
         </div>
      </body>
    </html>
  </body>
</html>



@endsection
