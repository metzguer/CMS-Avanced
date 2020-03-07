<?php

namespace App\Http\Controllers\Backend;

use App\User;

class DashboardController extends Controller
{
	

    public function index(User $user)
    {
    	$title = "Usuarios";
    	$users = $user->take(5)->get();
    	$date = date("d-m-Y");
    	return view("Backend/dashboard", compact("users", "title", "date"));
    }
}
