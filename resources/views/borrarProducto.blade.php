@extends('plantilla')

@section("main")
<body>
    <link rel="stylesheet" href="/css/borrarProducto.css">
        
            <div class="productos">

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
                    
                    <form action="/borrarProducto" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <input type="submit" value="Borrar Producto">
                </form>

                </div>
                @empty
                @endforelse 
                
       
         </div>
</body>

@endsection
          
              
  
