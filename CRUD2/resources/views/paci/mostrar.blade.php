<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Médico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
            font-size: 18px;
        }

        strong {
            display: inline-block;
            width: 140px;
            color: #555;
        }

        .back-link {
            display: block;
            margin-top: 30px;
            text-align: center;
        }

        .back-link a {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-link a:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Detalhes do Paciente</h1>

        <ul>
            <li><strong>ID:</strong> {{ $paciente->id }}</li>
            <li><strong>Nome:</strong> {{ $paciente->nome }}</li>
            <li><strong>Dt/Cadastro:</strong> {{ $paciente->idade }}</li>
            <li><strong>Email:</strong> {{ $paciente->email }}</li>
            <li><strong>CPF:</strong> {{ $paciente->cpf }}</li> 
            <li><strong>CEP:</strong> {{ $paciente->cep }}</li>
        </ul> 

        <div class="back-link">
            <a href="{{ route('paci.listar') }}">← Voltar para a lista</a>
        </div>
    </div>

</body>
</html>
