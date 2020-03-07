<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	$title="Home";
    	return view ("frontend.home", compact("title"));
    }
    public function nosotros(){
    	$title="Nosotros";
    	return view ("frontend.home", compact("title"));
    }
     public function mision(){
    	$title="Mision";
    	return view ("frontend.home", compact("title"));
    }
     public function vision(){
    	$title="Vision";
    	return view ("frontend.home", compact("title"));
    }
     public function contacto(){
    	$title="Contacto";
    	return view ("frontend.home", compact("title"));
    }
   
}
