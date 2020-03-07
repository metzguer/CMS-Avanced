<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
    	$title = "Blog";
    	return view ("frontend.blog", compact("title"));
    }
}
