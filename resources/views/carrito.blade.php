
@extends("plantilla")
@section("main")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carrito.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  
  <div class="contenedor-principal">

      <div class="titulo-compras">
        <h1 class>Mis Compras</h1>
      </div>

      <br>

      <section class="productos">
        @forelse ($carritos as $producto)
        
        <div class="producto1">
          
          <div class="imagen-producto">
            <img src="/storage/{{$producto->imagen}}" width="300px" alt="temaiken">
          </div>

          <div class="texto-producto">
              <div class="titulo-productos">
                    <h3>{{($producto->nombre)}}</h3>
              </div>
              
              <div class="descripcion-producto">
                <p>{{$producto->descripcion}}</p>
              </div>

              <div class="estado">
                <label for="estadoCompra" class="cantidad">
                  <p>{{$producto->pivot->estadoCompra}}</p>
                  </label>
              </div>  

              <div class="comprar">
                <p>valor <br>${{$producto->precio}}</p>
              </div>

              <div class="cantidad">
                <form action="comprar.php" metod="GET">
                  <label for="cantidad" class="cantidad">
                  <p>Cantidad {{$producto->pivot->cantidad}}</p>
                  </label>
                </form>
              </div>

              <div class="comprar">
                  <button type="button" class="btn btn-secondary">Comprar</button>
              </div>

              <div class="borrar">
                <form  action="borrarCarrito" method="post">
                  @csrf
                <input type="hidden" name="idProducto" value="{{$producto->id}}">
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
              </div>
        </div>
        
     
        </div>
        
        @empty
              
        @endforelse
      
    </section>
   
    
  </div>

@endsection
