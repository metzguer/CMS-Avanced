<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$title = "Usuarios";
    	$users = User::all();
    	return view("Backend/dashboard", compact("users", "title"));
    }
}
