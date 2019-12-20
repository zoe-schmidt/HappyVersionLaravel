@extends("plantilla")
@section("main")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/viajes.css">
<div class="contenedor">



    <div class="titulo">
      <h1>VIAJES</h1>
      </div>
   
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
           
          {{$productos->links()}}


@endsection
