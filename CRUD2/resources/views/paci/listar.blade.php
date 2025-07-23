<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de pacientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .top-link {
            margin-bottom: 20px;
            text-align: right;
        }

        .top-link a {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .top-link a:hover {
            background-color: #218838;
        }

        .top-link .btn-voltar {
            background-color: #1a237e;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .top-link .btn-voltar:hover {
            background-color: #0f1546;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            margin: 2px;
            display: inline-block;
        }

        .btn-ver {
            background-color: #007bff;
            color: white;
        }

        .btn-editar {
            background-color: #ffc107;
            color: white;
        }

        .btn-deletar {
            background-color: #dc3545;
            color: white;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Lista de pacientes</h1>

        <div class="top-link">
            <a href="{{ route('paci.create') }}">+ Cadastrar novo paciente</a>
        </div>
        <div class="top-link">
            <a href="{{ url('/') }}">← Voltar para o Início</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Cadastro</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>CEP</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->idade }}</td>
                    <td>{{ $paciente->email }}</td>
                    <td>{{ $paciente->cpf }}</td>
                    <td>{{ $paciente->cep }}</td>
                    <td>
                        <a href="{{ route('paci.mostrar', $paciente->id) }}" class="btn btn-ver"> Ver</a>
                        <a href="{{ route('paci.editar', $paciente->id) }}" class="btn btn-editar"> Editar</a>
                        <form action="{{ route('paci.deletar', $paciente->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este paciente?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-deletar">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>