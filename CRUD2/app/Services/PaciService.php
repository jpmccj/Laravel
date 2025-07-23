<?php

namespace App\Services;

use App\Models\PacienteModel;

class PaciService
{

    private $repo;

    public function __construct(PacienteModel $repo)
    {
        $this->repo = $repo;
    }
    public function criar($data)
    {
        $tabelaPaciente = array(
            'nome' => $data['nome'],
            'idade' => $data['idade'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'cep' => $data['cep']
        );

        return $this->repo->criar($tabelaPaciente);
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
        $tabelaPaciente = array(
            'nome' => $data['nome'],
            'idade' => $data['idade'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'cep' => $data['cep']
        );

        return $this->repo->atualizar($id, $tabelaPaciente);
    }
}
