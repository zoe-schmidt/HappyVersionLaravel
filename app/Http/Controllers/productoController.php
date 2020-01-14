<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\user;
use App\Carrito;
use Illuminate\Support\Facades\Auth;

class productoController extends Controller
{
    
    public function iraCargarProducto(){
        $categorias=categoria::all();
        
        $vac=compact("categorias");

        return view("cargarProducto",$vac);
    }

    public function mostrarProducto(){
        $productos=producto::all();

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
        $nuevoProducto->idcategoria=$form["categoria"];
        $nuevoProducto->imagen=$nombreArchivo; 

        $nuevoProducto->save();

        return redirect("/");
    }

    public function irABorrarProducto(){
        $productos=producto::paginate(4);

        $vac=compact("productos");
        
        return view("/borrarProducto",$vac);
    }

    public function borrarProducto(request $form){
        $id=$form["id"];

        $productos=producto::find($id);

        $productos->delete();

        return redirect("/borrarProducto");

    }
/*
     public function irACarrito(){

        $id=$form["id"];
        
        $productos=producto::find($id);

            $vac= compact("id");

            return redirect("/carrito");
        }
    */
    public function agregarAlCarrito(request $form){
        $user=auth::user();

        if (isset($user)){

            $id=$form["id"];
            $productos=producto::find($id);
            $contieneArticulo = carrito::where('idUsuario',Auth::user()->id)->where('idProducto',$id);
            
            if($contieneArticulo->exists()){
                $articulo = $contieneArticulo->get()->first();
                $articulo->cantidad++;
                $articulo->save();
            }else{
                    $carrito = new carrito();
                    $carrito->idProducto = $productos->id;
                    $carrito->idUsuario = Auth::user()->id;
                    $carrito->estadoCompra = 'Pendiente de pago';
                    $carrito->cantidad = 1;
                    $carrito->save();
            }
    
            $carritos = Auth::user()->productos()->get();
            return view("/carrito", compact('carritos'));
          
        }
        else {
            return redirect("/login");
        }
    }

    public function mostrarCarrito(){
        if(\Auth::check()){
            $carritos = Auth::user()->productos()->get();
            return view("/carrito", compact('carritos'));
        }else{
            return redirect('/');
        }
    }

    public function borrarCarrito(request $form){
        $id=$form["idProducto"];

        $carrito = carrito::where('idUsuario',Auth::user()->id)->where('idProducto',$id);
        $carrito->delete();

        return redirect("/carrito");

    }

}
