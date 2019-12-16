<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class HomeController extends Controller
{

  //PARA SABER SI ESTA LOGUEADO EL USUARIO,TRAES UN OBJETO USUARIO (CON LA FUNCION USER) Y LA GUARDAS EN UNA VARIABLE//
  public function usuarioLogueado(){
  $usuarioLog=[];
  $usuarioLog=Auth::user();
  if ($usuarioLog==null){
    return redirect("/login");
  }
  }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index(){
    
        return view ('home');
    }

    public function irAHome(){
        $productos=producto::paginate(4);

        $vac=compact("productos");
        return view("home/index",$vac);
    }

    public function irAContacto(){
        return view("home/contacto");
    }

    public function irAFaq(){
        return view("home/faq");
    }

    public function irAGastronomia(){
       $productos=producto::paginate(3);

       $vac=compact("productos");

        return view("gastronomia",$vac);
    }

    public function irAActividades(){
        return view("actividades");
    }

    public function irAViajes(){
        return view("viajes");
    }

    public function irALogin(){
        return view("/auth/login");
    }

    public function irACarrito(){
        return view("carrito");
    }
    public function irAPerfil(){
        return view("perfil");
    }

}
