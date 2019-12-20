
@extends("plantilla")

@section("main")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
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
              <img id="imagenes-carrousel" class="d-block w-100" src="/imagenes/carusel-viajes.jpg" alt="First slide">
              <div class="texto-carrousel">
                  <h3 id="Viajes">Viajes</h3>
                </div>
            </div>

            <div class="carousel-item">
              <img id="imagenes-carrousel" class="d-block w-100" src="/imagenes/dia-de-spa-en-pareja.jpg" alt="Second slide">
              <div class="texto-carrousel">
                  <h3 id="Actividades">Actividades</h3>
                </div>
            </div>

            <div class="carousel-item">
              <img id="imagenes-carrousel" class="d-block w-100" src="/imagenes/carusel-sushi.jpg" alt="Third slide">
              <div class="texto-carrousel">
                  <h3 id="Gastronomia">Gastronomía</h3>
                </div>
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
                @csrf

                @forelse ($productos as $producto)
               
               <div class="producto1">

                  <div class="imagen-producto1">
                    <img id="cena-de-sushi-para-dos" src="/storage/{{$producto->imagen}}" alt="cena-de-sushi-para-dos">
                  </div>
                 
                    <div class="titulo-descripcion-producto">
                      <br>
                      <p class="titulo-producto" >{{$producto->nombre}}</p>
                      <br>
                      <p class="descripcion-producto">{{$producto->descripcion}} </p>
                      <br>
                      <p class="precio">${{$producto->precio}}</p>
                      <br>
                    </div>

                    <div class="ver-mas">
                      <form action="/carrito" method="post">
                        @csrf
                        <input type="hidden" name="id" value={{$producto->id}}>
                      <button type="submit" class="btn btn-secondary">Agregar al Carrito</button>
                    </form>
                      </div>

                </div>
              
                    @empty
                    @endforelse
              </div>


        <div class="paginador">
            {{$productos->links()}}
          </div>


        </div>
        <div class="kits-en-oferta">
            <h4>Kits en Oferta!</h4>
          </div>
            <div class="productos">
                @csrf

                @forelse ($productos as $producto)
                @if($producto->precio<15000)
               <div class="producto1">

                  <div class="imagen-producto1">
                    <img id="cena-de-sushi-para-dos" src="/storage/{{$producto->imagen}}" alt="cena-de-sushi-para-dos">
                  </div>
                  <div class="corazon">
                      <i class="fas fa-heart"></i>
                      </div>
                    <div class="titulo-descripcion-producto">
                      <br>
                      <p class="titulo-producto" >{{$producto->nombre}}</p>
                      <br>
                      <p class="descripcion-producto">{{$producto->descripcion}} </p>
                      <br>
                      <p class="precio">${{$producto->precio}}</p>
                      <br>
                    </div>

                    <div class="ver-mas">
                      <form action="/carrito" method="post">
                        @csrf
                        <input type="hidden" name="id" value={{$producto->id}}>
                      <button type="submit" class="btn btn-secondary">Agregar al Carrito</button>
                    </form>
                      </div>

                </div>
                @endif
                    @empty
                    @endforelse
              </div>


        <div class="paginador">
            {{$productos->links()}}
          </div>


        </div>

         
      </main>

    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </div>
@endsection
