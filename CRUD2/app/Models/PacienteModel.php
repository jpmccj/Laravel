<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PacienteModel extends Model
{
    public function criar($tabelaPaciente)
    {
        $sql = "INSERT INTO pacientes (nome, idade, email, cpf, cep) VALUES (:nome, :idade, :email, :cpf, :cep)";
        $bind = array(
            ':nome' => $tabelaPaciente['nome'],
            ':idade' => $tabelaPaciente['idade'], 
            ':email' => $tabelaPaciente['email'],
            ':cpf' => $tabelaPaciente['cpf'],
            ':cep' => $tabelaPaciente['cep']
        );
        return DB::insert($sql, $bind);
    }

    public function listar()
    {
        $sql = "SELECT * FROM pacientes";
        return DB::select($sql);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM pacientes WHERE id = :id LIMIT 1";
        $bind = [':id' => $id];
        $result = DB::select($sql, $bind);
        return $result ? $result[0] : null;
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM pacientes WHERE id = :id";
        $bind = [':id' => $id];
        return DB::delete($sql, $bind);
    }
    public function atualizar($id, $tabelaPaciente)
    {
        $sql = "UPDATE pacientes 
                   SET nome = :nome, 
                       idade = :idade, 
                       email = :email, 
                       cpf = :cpf, 
                       cep = :cep 
                 WHERE id = :id";
        $bind = array(
            ':id' => $id,
            ':nome' => $tabelaPaciente['nome'],
            ':idade' => $tabelaPaciente['idade'],
            ':email' => $tabelaPaciente['email'],
            ':cpf' => $tabelaPaciente['cpf'],
            ':cep' => $tabelaPaciente['cep']
        );
        return DB::update($sql, $bind);
    }
}
