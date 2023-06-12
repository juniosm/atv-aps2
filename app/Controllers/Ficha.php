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
        $userfound = $user->select("*")->where('cod_barra', $cod)->first();

        if (!isset($userfound)) {
            $retorno['erro'] = '<span class="small"> erro</span>';
            return $this->response->setJSON($retorno);
        }
        $valor = $userfound->num_fichas - 1;
        $this->updateficha($userfound);

        $retorno['certo'] = "<div>" . esc($valor) . "</div>";
        return $this->response->setJSON($retorno);
    }


    public function updateficha($userfound)
    {
        $user = new User();

        $data = [
            'id' => $userfound->id,
            'num_fichas' => $userfound->num_fichas,
        ];

        ## Update record
        if ($user->update($userfound->id, $data)) {
            session()->setFlashdata('message', 'Updated Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        };
    }
}