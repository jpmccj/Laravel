<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Médico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #e0a800;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            color: #007bff;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <form action="{{ route('paci.atualizar', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar Paciente</h1>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome completo" value="{{ old('nome', $paciente->nome) }}" required>

        <label for="idade">Idade:</label>
        <input type="date" id="idade" name="idade" placeholder="Idade do paciente" value="{{ old('idade', $paciente->idade) }}" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Email do paciente" value="{{ old('email', $paciente->email) }}" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="CPF do paciente" value="{{ old('cpf', $paciente->cpf) }}" required>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" placeholder="CEP do paciente" value="{{ old('cep', $paciente->cep) }}" required>

        <button type="submit">Salvar Alterações</button>

        <div class="back-link">
            <a href="{{ route('paci.listar') }}">← Cancelar e voltar</a>
        </div>
    </form>

</body>

</html>