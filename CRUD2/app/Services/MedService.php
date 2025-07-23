<?php

namespace App\Services;

use App\Models\MedicoModel;

class MedService
{
    private $repo;

    public function __construct(MedicoModel $repo)
    {
        $this->repo = $repo;
    }

    //pega os dados do request e formata para o modelo
    //e chama o método do repositório para inserir no banco de dados
    public function criar($data)
    {

        $tabelaMedico = array(
            'nome' => $data['name'],
            'specialty' => $data['specialty'],
            'crm' => $data['crm'],
            'email' => $data['email'],
        );


        return $this->repo->criar($tabelaMedico);
    }
    //chama o método do repositório para listar os médicos e retorna os dados para o controller
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
    //editar medico
    public function atualizar($id, $data)
    {
        $tabelaMedico = array(
            'nome' => $data['nome'],
            'email' => $data['email'],
            'crm' => $data['crm'],
            'specialty' => $data['specialty'],
        );

        return $this->repo->atualizar($id, $tabelaMedico);
    }
}
