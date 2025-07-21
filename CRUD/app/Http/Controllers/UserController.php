<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //recuperar os registros de medicos do banco de dados
        $users = User::orderByDesc('id')->paginate(10); //pode ser usado o paginate(10) para mostrar 10 registros por pagina, ou all() para mostrar todos os registros

        //carrega a view de listagem de medicos
        return view('med.index', ['users' => $users]); //passa os dados dos medicos para a view, o nome da view deve ser o mesmo do metodo index do UserController
        //o arquivo med/index.blade.php deve existir/ e o med.index deve estar com o mesmo nome do web.php

    }


    public function create()
    {
        //carrega a view para criar um medico
        return view('med.create'); //o arquivo med/create.blade.php deve existir/ e o med.create deve estar com o mesmo nome do web.php
    }
    //metodo para salvar o medico no banco de dados
    //o metodo store deve receber os dados do formulario, e salvar no banco de dados
    //depois redirecionar para a pagina de listagem de medicos, ou para a pagina de sucesso
    public function store(UserRequest $request)
    {
        //dd($request->all()); aqui deve ser implementado o codigo para salvar o medico no banco de dados


        try {


            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'crm' => $request->crm,
                'specialty' => $request->specialty,
            ]);

            return redirect()->route('med.create')->with('success', 'Médico cadastrado com sucesso!'); //redireciona para a pagina de criar medico, e mostra uma mensagem de sucesso
        } catch (Exception $e) {

            return back()->withInput()->with('error', 'Erro ao cadastrar médico: ');
        }
    }

    //editar
    public function edit(User $user)
    {
        return view('med.edit', ['user' => $user]);
    }


    public function show(User $user)
    {
        return view('med.show', ['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'crm' => $request->crm,
            'specialty' => $request->specialty,
        ]);
        return redirect()->route('med.index')->with('success', 'Médico atualizado com sucesso!');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('med.index')->with('success', 'Médico deletado com sucesso!');
    }
}
