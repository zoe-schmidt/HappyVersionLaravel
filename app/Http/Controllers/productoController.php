<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class productoController extends Controller
{
    
    public function iraCargarProducto(){
        return view("cargarProducto");
    }

    public function agregarProducto(request $form){

        $reglas=[
            "nombre"=>"required|string|min:3",
            "descripcion"=>"required|string|min:3",
            "precio"=>"integer",
            "imagen"=>"file",
        ];

        $message=[
            "string"=> "El :attribute debe ser un texto",
            "required"=>"El :attribute no puede estar vacio",
            "min"=> "El :attribute no puede tener menos de 3 caracteres",
            "integer"=> "El :attribute debe ser un número",

        ];

        $this->validate($form,$reglas,$message);

        $nuevoProducto=new producto();

        $ruta=$form->file("imagen")-store("public");
        $nombreArchivo=basename($ruta);

        $nuevoProducto->nombre=$form["nombre"];
        $nuevoProducto->descripcion=$form["descripcion"];
        $nuevoProducto->precio=$form["precio"];
        //$nuevoProducto->imagen=$nombreArchivo; HAY QUE AGREGARLA A LA BASE//
        //hacer el php storage link!//



        $nuevoProducto->save();

        return redirect("/cargarProducto");
    }
}
