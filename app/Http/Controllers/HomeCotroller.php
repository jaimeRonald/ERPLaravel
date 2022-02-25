<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCotroller extends Controller
{
    public function __invoke()// el controlador solo administrara una sola ruta 
    {
        return "la llegada llego ";
    }
}
