<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Paciente</title>
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

  <form action="{{ route('paci.ler')}}" method="POST">
    @csrf
    <h1>Cadastrar Paciente</h1>

    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" placeholder="Nome completo" required>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" placeholder="Idade do paciente" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Email do paciente" required>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" placeholder="CPF do paciente" required>

    <button type="submit">Cadastrar</button>
  </form>

</body>
</html>
