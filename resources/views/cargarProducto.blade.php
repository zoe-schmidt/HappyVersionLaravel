@extends('plantilla')

@section("main")
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/formulario-producto.css">
<link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">


<div class="contenedor-principal">

    <form action="" method="post" class="form-productos" enctype="multipart/form-data">
        @csrf
        <div class="cargar-titulo">
            <h1>CARGAR UN NUEVO PRODUCTO</h1>
        </div>
        
        <div class="titulo">
           <label for="nombre">Titulo del Producto:</label>
           <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}"> 
           <br>
           @error('nombre')
                  <small class="error">{{$message}}</small>
                  @enderror
        </div>

        <div>
            <label for="categoria"> Categoría:</label>
        <select name="categoria" id="categoria">

            @foreach ($categorias as $categoria)
            <option name="categoria" value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
            @endforeach
           
        </select>
        </div>

        <div>
            <label for="descripcion" class="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
            <br>
            @error('descripcion')
                  <small class="error">{{$message}}</small>
                  @enderror
        </div>

    <div>
        <label for="precio">precio:</label>
        <input type="text" name="precio" id="precio">
        <br>
        @error('precio')
                  <small class="error">{{$message}}</small>
                  @enderror
    </div>

    <div>
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="">
    </div>

    <div class="botones">
        <button type="submit">Enviar</button>
        <button type="reset">Cancelar</button>
    </div>

    
</form>


</div>

@endsection

