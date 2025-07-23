<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EnferService;

class EnferController extends Controller
{
    private $enferService;
    public function __construct(EnferService $enferService)
    {
        $this->enferService = $enferService;
    }


    public function create()
    {
        return view('enfermeiro.create');
    }
    public function ler(Request $request)
    {
        $data = $request->all();

        $retorno = $this->enferService->criar($data);

        if ($retorno) {
            return redirect()->back()->with('success', 'Paciente cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar paciente.');
        }
    }

    public function listar()
    {
        $enfermeiros = $this->enferService->listar();
        return view('enfermeiro.listar', ['enfermeiros' => $enfermeiros]);
    }

    public function mostrar($id)
    {
        $enfermeiro = $this->enferService->buscarPorId($id);

        if (!$enfermeiro) {
            return redirect()->route('enfermeiro.listar')->with('error', 'enfermeiro não encontrado.');
        }
        return view('enfermeiro.mostrar', ['enfermeiro' => $enfermeiro]);
    }

    public function deletar($id)
    {
        $resultado = $this->enferService->deletar($id);

        if ($resultado) {
            return redirect()->route('enfermeiro.listar')->with('success', 'Enfermeiro deletado com sucesso!');
        } else {
            return redirect()->route('enfermeiro.listar')->with('error', 'Erro ao deletar enfermeiro.');
        }
    }

     public function editar($id)
    {
        $enfermeiro = $this->enferService->buscarPorId($id);

        if (!$enfermeiro) {
            return redirect()->route('enfermeiro.listar')->with('error', 'enfermeiro não encontrado.');
        }

        return view('enfermeiro.editar', ['enfermeiro' => $enfermeiro]);
    }

    public function atualizar(Request $request, $id)
    {
        $data = $request->all();
        $resultado = $this->enferService->atualizar($id, $data);

        if ($resultado) {
            return redirect()->route('enfermeiro.listar')->with('success', 'enfermeiro atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao atualizar enfermeiro.');
        }
    }
}
