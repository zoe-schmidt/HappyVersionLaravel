<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
}
