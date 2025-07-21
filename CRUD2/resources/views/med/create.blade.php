<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <form action="{{ route('med.ler')}}" method="POST">
        @csrf
        <h1>Cadastrar Médico</h1>

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Nome completo" value="{{ old('name') }}" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Email do médico" value="{{ old('email') }}" required>

        <label for="crm">CRM:</label>
        <input type="text" id="crm" name="crm" placeholder="CRM do médico" value="{{ old('crm') }}" required>

        <label for="specialty">Especialidade:</label>
        <input type="text" id="specialty" name="specialty" placeholder="Especialidade do médico" value="{{ old('specialty') }}" required>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
