<?php

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController
{
  public function index()
  {
    return view('login');
  }

  public function store()
  {
    $validate = $this->validate(
      [
        'email' => 'required|valid_email',
        'password' => 'required',
      ],
      [
        'email' => [
          'required' => 'O email é obrigatorio',
          "valid_email" => 'Digite um email válido'
        ],
        'password' => [
          'required' => 'A senha é obrigatoria'
        ]
      ]
    );

    if (!$validate) {
      return redirect()->route('login')->with('errors', $this->validator->getErrors());
    }

    $user = new User();
    $userFound = $user->where('email', $this->request->getPost('email'))->first();

    if (!$userFound) {
      return redirect()->route('login')->with('message', "Email ou senha incorreto.");
    }


    if (!password_verify($this->request->getPost('password'), $userFound->password)) {
      return redirect()->route('login')->with('message', "Email ou senha incorreto.");
    }

    unset($userFound->password);
    session()->set('user', $userFound);

    return redirect()->route("home");
  }
}