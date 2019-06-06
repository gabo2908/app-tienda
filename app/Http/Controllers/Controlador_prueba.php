<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_prueba extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }
}
