<?php

namespace App\Http\Controllers;

use App\Services\PaciService;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    private $paciService;

    public function __construct(PaciService $paciService)
    {
        $this->paciService = $paciService;
    }
    //criar paciente
    public function create()
    {
        return view('paci.create');
    }
    public function ler(Request $request)
    {
        $data = $request->all();

        $retorno = $this->paciService->criar($data);

        if ($retorno) {
            return redirect()->back()->with('success', 'Paciente cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar paciente.');
        }
    }

    //listar pacientes
    public function listar()
    {
        $pacientes = $this->paciService->listar();
        return view('paci.listar', ['pacientes' => $pacientes]);
    }

    // Exibir paciente por ID
    public function mostrar($id)
    {
        $paciente = $this->paciService->buscarPorId($id);

        if (!$paciente) {
            return redirect()->route('paci.listar')->with('error', 'Paciente não encontrado.');
        }
        return view('paci.mostrar', ['paciente' => $paciente]);
    }

    // Deletar paciente
    public function deletar($id)
    {
        $resultado = $this->paciService->deletar($id);

        if ($resultado) {
            return redirect()->route('paci.listar')->with('success', 'Paciente deletado com sucesso!');
        } else {
            return redirect()->route('paci.listar')->with('error', 'Erro ao deletar paciente.');
        }
    }

    // Editar paciente
    public function editar($id)
    {
        $paciente = $this->paciService->buscarPorId($id);

        if (!$paciente) {
            return redirect()->route('paci.listar')->with('error', 'Paciente não encontrado.');
        }

        return view('paci.editar', ['paciente' => $paciente]);
    }

    public function atualizar(Request $request, $id)
    {
        $data = $request->all();
        $resultado = $this->paciService->atualizar($id, $data);

        if ($resultado) {
            return redirect()->route('paci.listar')->with('success', 'Paciente atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao atualizar paciente.');
        }
    }
}
