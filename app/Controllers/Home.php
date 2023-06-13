<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!isset(session()->get('user')->nome)) {
            return redirect()->route('login');
        }
        return view('home');
    }
}
