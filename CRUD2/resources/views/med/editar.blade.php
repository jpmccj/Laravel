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

    <form action="{{ route('med.atualizar', $medico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar Médico</h1>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $medico->nome) }}" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $medico->email) }}" required>

        <label for="crm">CRM:</label>
        <input type="text" id="crm" name="crm" value="{{ old('crm', $medico->crm) }}" required>

        <label for="specialty">Especialidade:</label>
        <input type="text" id="specialty" name="specialty" value="{{ old('specialty', $medico->specialty) }}" required>

        <button type="submit">Salvar Alterações</button>

        <div class="back-link">
            <a href="{{ route('med.listar') }}">← Cancelar e voltar</a>
        </div>
    </form>

</body>
</html>
