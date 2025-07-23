<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EnfModel extends Model
{
    public function criar($tabelaEnfermeiro)
    {
        $sql = "INSERT INTO enfermeiros (nome, email, cpf, rg, coren) VALUES (:nome, :email, :cpf, :rg, :coren)";
        $bind = array(
            ':nome' => $tabelaEnfermeiro['nome'],
            ':email' => $tabelaEnfermeiro['email'],
            ':cpf' => $tabelaEnfermeiro['cpf'],
            ':rg' => $tabelaEnfermeiro['rg'],
            ':coren' => $tabelaEnfermeiro['coren']
        );
        return DB::insert($sql, $bind);
    }

    public function listar()
    {
        $sql = "SELECT * FROM enfermeiros";
        return DB::select($sql);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM enfermeiros WHERE id = :id LIMIT 1";
        $bind = [':id' => $id];
        $result = DB::select($sql, $bind);
        return $result ? $result[0] : null;
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM enfermeiros WHERE id = :id";
        $bind = [':id' => $id];
        return DB::delete($sql, $bind);
    }

    public function atualizar($id, $tabelaEnfermeiro)
    {
        $sql = "UPDATE enfermeiros 
                   SET nome = :nome, 
                       email = :email, 
                       cpf = :cpf, 
                       rg = :rg,
                       coren = :coren 
                 WHERE id = :id";
        $bind = array(
            ':id' => $id,
            ':nome' => $tabelaEnfermeiro['nome'],
            ':rg' => $tabelaEnfermeiro['rg'],
            ':email' => $tabelaEnfermeiro['email'],
            ':cpf' => $tabelaEnfermeiro['cpf'],
            ':coren' => $tabelaEnfermeiro['coren']
        );
        return DB::update($sql, $bind);
    }
}
