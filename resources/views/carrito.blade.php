
@extends("plantilla")
@section("main")
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carrito.css">

  
  <div class="contenedor-principal">

      <div class="titulo-compras">
        <h1 class>Mis Compras</h1>
      </div>

      <br>

      <section class="productos">
        @forelse ($carritos as $producto)
        
        <div class="producto1">
        
          <div class="titulo-productos">
                <h3>{{($producto->product()->get()->first()->nombre)}}</h3>
          </div>

            <div class="imagen-producto">
              <img src="/storage/{{$producto->product()->get()->first()->imagen}}" width="300px" alt="temaiken">
            </div>
            <div class="descripcion-producto">
              <p>{{$producto->product()->get()->first()->descripcion}}</p>
            </div>
            <form action="comprar.php" metod="GET">
              <label for="cantidad" class="cantidad">
                Cantidad
              </label>
            <select name="cantidad" id="cantidades">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>

            </select>
            <input type="button" value="Comprar" class="comprar">
          </form>
     
        </div>
        
        @empty
              
        @endforelse
      
    </section>
   
    
  </div>

@endsection
