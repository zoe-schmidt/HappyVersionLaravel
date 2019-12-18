@extends("plantilla")
@section("main")

<link rel="stylesheet" href="/css/viajes.css">
<div class="contenedor">



  <main>
    <div class="titulo">
      <h1>VIAJES</h1>
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
                <p class="precio">{{$producto->precio}}</p> 
                <br>
            </div>

            <div class="ver-mas">
                <a href=""><p>VER MÁS</p></a>
              </div>
             
        </div>
       
            @empty
            @endforelse    
           

          </div>
           
          {{$productos->links()}}


@endsection
