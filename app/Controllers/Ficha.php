<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ficha extends BaseController
{
    public function index()
    {
        return view('ficha');
    }
}
