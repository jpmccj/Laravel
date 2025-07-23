<?php

namespace App\Services;

use App\Models\EnfModel;

class EnferService
{
    private $repo;
    public function __construct(EnfModel $repo)
    {
        $this->repo = $repo;
    }

    public function criar($data)
    {
        $tabelaEnfermeiro = array(
            'nome' => $data['nome'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'coren' => $data['coren']
        );
        return $this->repo->criar($tabelaEnfermeiro);
    }

    public function listar()
    {
        return $this->repo->listar();
    }

    public function buscarPorId($id)
    {
        return $this->repo->buscarPorId($id);
    }

    public function deletar($id)
    {
        return $this->repo->deletar($id);
    }

    public function atualizar($id, $data)
    {
        $tabelaEnfermeiro = array(
            'nome' => $data['nome'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'coren' => $data['coren']
        );

        return $this->repo->atualizar($id, $tabelaEnfermeiro);
    }
}
