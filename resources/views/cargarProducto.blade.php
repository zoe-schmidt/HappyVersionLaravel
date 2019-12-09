@extends('plantilla')

@section("main")

<link rel="stylesheet" href="/css/formulario-producto.css">
<link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">


<div class="contenedor-principal">

    <form action="" method="post" class="form-productos" enctype="multipart/form-data">

        <div class="cargar-titulo">
            <h1>CARGAR UN NUEVO PRODUCTO</h1>
        </div>
        
        <div class="titulo">
           <label for="titulo">Titulo del Producto:</label>
           <input type="text" name="titulo" id="titulo"> 
        </div>

        <div>
            <label for="categoria"> Categoría:</label>
        <select name="categoria" id="categoria">
            <option value="via">Viajes</option>
            <option value="act">Actividades</option>
            <option value="gas">Gastronomía</option>
        </select>
        </div>

        <div>
            <label for="descripcion" class="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
        </div>

    <div>
        <label for="precio">precio:</label>
        <input type="text" name="precio" id="precio">
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

