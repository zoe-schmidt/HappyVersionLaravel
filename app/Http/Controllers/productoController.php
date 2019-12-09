<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\producto;

class productoController extends Controller
{
    
    public function iraCargarProducto(){
        return view("cargarProducto");
    }

    public function listado(){
        $producto=producto::all();

        $vac=compact("producto");

        return view("cargarProducto",$vac);

    }
}
