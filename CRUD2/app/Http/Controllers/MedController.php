<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\MedService;
use Illuminate\Http\Request;

class MedController extends Controller
{
    private $medService;

    public function __construct(MedService $medService)
    {
        $this->medService = $medService;
    }
    //criar
    public function create()
    {
        return view('med.create');
    }

    public function ler(Request $request)
    {
        $data = $request->all();

        $retorno = $this->medService->criar($data);

        if ($retorno) {
            return redirect()->back()->with('success', 'Médico cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar médico.');
        }
    }

    //listar médicos
    public function listar()
    {
        $medicos = $this->medService->listar();
        return view('med.listar', ['medicos' => $medicos]);
    }

    // Exibir médico por ID
    public function mostrar($id)
    {
        $medico = $this->medService->buscarPorId($id);

        if (!$medico) {
            return redirect()->route('med.listar')->with('error', 'Médico não encontrado.');
        }

        return view('med.mostrar', ['medico' => $medico]);
    }

    //editar
    public function editar($id)
    {
        $medico = $this->medService->buscarPorId($id);

        if (!$medico) {
            return redirect()->route('med.listar')->with('error', 'Médico não encontrado.');
        }

        return view('med.editar', ['medico' => $medico]);
    }

    public function atualizar(Request $request, $id)
    {
        $data = $request->all();
        $resultado = $this->medService->atualizar($id, $data);

        if ($resultado) {
            return redirect()->route('med.listar')->with('success', 'Médico atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao atualizar médico.');
        }
    }


    public function deletar($id)
    {
        $this->medService->deletar($id);
        return redirect()->route('med.listar')->with('success', 'Médico deletado com sucesso.');
    }
}
