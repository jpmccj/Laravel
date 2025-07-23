<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MedicoModel extends Model
{
    public function criar($tabelaMedico)
    {

        $sql = "INSERT INTO medicos (nome, email, crm, specialty) VALUES (:nome, :email, :crm, :specialty)";

        $bind = array(
            ':nome' => $tabelaMedico['nome'],
            ':specialty' => $tabelaMedico['specialty'],
            ':crm' => $tabelaMedico['crm'],
            ':email' => $tabelaMedico['email']
        );

        return DB::insert($sql, $bind);
    }
    //somente os comandos que podem ser utilizados no banco de dados 
    public function listar()
    {
        $sql = "SELECT * FROM medicos";
        return DB::select($sql);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM medicos WHERE id = :id LIMIT 1";
        $bind = [':id' => $id];
        $result = DB::select($sql, $bind);
        return $result ? $result[0] : null;
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM medicos WHERE id = :id";
        return DB::delete($sql, [':id' => $id]);
    }

    public function atualizar($id, $tabelaMedico)
    {
        $sql = "UPDATE medicos SET nome = :nome, email = :email, crm = :crm, specialty = :specialty WHERE id = :id";

        $bind = array(
            ':id' => $id,
            ':nome' => $tabelaMedico['nome'],
            ':email' => $tabelaMedico['email'],
            ':crm' => $tabelaMedico['crm'],
            ':specialty' => $tabelaMedico['specialty']
        );

        return DB::update($sql, $bind);
    }
}






// buscar por id
//  $sql = "SELECT * FROM medicos WHERE id = :id LIMIT 1";
        
//         $result = DB::select($sql, [':id' => $id]);
//         return $result ? $result[0] : null;
