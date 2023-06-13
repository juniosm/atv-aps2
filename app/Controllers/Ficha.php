<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

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

    public function ler_cod()
    {
        return view('ler_cod');
    }

    public function store()
    {
        if (!$this->request->isAjax()) {
            return redirect()->route("ler_cod");
        }
        $cod = $this->request->getPost('cod');
        $retorno = [];

        $user = new User();
        $userfound = $user->select("id, cod_barra, num_fichas")->where('cod_barra', $cod)->first();

        if (!isset($userfound)) {
            $retorno['erro'] = '<span class="small"> erro</span>';
            return $this->response->setJSON($retorno);
        }

        $user->where('id', $userfound->id);
        $user->set(array('num_fichas' => 'num_fichas-1'));
        $user->update('user');

        $valor = $userfound->num_fichas - 1;
        $retorno['certo'] = "<div>" . esc($valor) . "</div>";

        return $this->response->setJSON($retorno);
    }
}
