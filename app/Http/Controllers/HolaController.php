<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    //
    public function index()
    {
     return view ("hola/index");
        //echo "index";
    }
    public function saludar(Request $request, $nombre)
    {
     return view ('hola/saludar', ['elnombre' => $nombre]);
        //echo "saludo";
    }

    
}
