<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ficha extends BaseController
{
    public function index()
    {
        return view('ficha');
    }

    public function add_fichas()
    {
        
        return view('add_fichas');
    }
    public function menu()
    {
        return view('menu');
    }
    public function cod_barras()
    {
        return view('cod_barras');
    }
}
