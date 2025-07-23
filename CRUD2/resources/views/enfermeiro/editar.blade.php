<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar enfermeiro</title>
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

    <form action="{{ route('enfermeiro.atualizar', $enfermeiro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar enfermeiro</h1>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $enfermeiro->nome) }}" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $enfermeiro->email) }}" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $enfermeiro->cpf) }}" required>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" value="{{ old('rg', $enfermeiro->rg) }}" required>

        <label for="coren">COREN:</label>
        <input type="text" id="coren" name="coren" value="{{ old('coren', $enfermeiro->coren) }}" required>

        <button type="submit">Salvar Alterações</button>

        <div class="back-link">
            <a href="{{ route('enfermeiro.listar') }}">← Cancelar e voltar</a>
        </div>
    </form>

</body>
</html>
