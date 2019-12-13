<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;

class productoController extends Controller
{
    
    public function iraCargarProducto(){
        $categorias=categoria::all();
        
        $vac=compact("categorias");

        return view("cargarProducto",$vac);
    }

    public function mostrarProducto($id){
        $productos=producto::find($id);

        $vac=compact("productos");

        return view("/",$vac);
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

        $ruta=$form->file("imagen")->store("public");
        $nombreArchivo=basename($ruta);

        $nuevoProducto->nombre=$form["nombre"];
        $nuevoProducto->descripcion=$form["descripcion"];
        $nuevoProducto->precio=$form["precio"];
        $nuevoProducto->imagen=$nombreArchivo; 

        $nuevoProducto->save();

        return redirect("/");
    }

    public function borrarProducto(request $form){
        $id=$form["id"];
        $producto=producto::find($id);

        $producto->delete();
    }
}
