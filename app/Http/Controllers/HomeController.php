<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        return view('home');
    }

    public function irAHome(){
        return view("home/index");
    }

    public function irAContacto(){
        return view("home/contacto");
    }

    public function irAFaq(){
        return view("home/faq");
    }

    public function irAGastronomia(){
        return view("home/gastronomia");
    }

    public function irAActividades(){
        return view("home/actividades");
    }

    public function irAViajes(){
        return view("home/viajes");
    }

    public function irALogin(){
        return view("/auth/login");
    }

    public function irARegistrate(){
        return view("/auth/register");
    }

    public function irACarrito(){
        return view("carrito");
    }


}
