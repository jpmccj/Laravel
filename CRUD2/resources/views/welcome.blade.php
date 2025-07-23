<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Cadastro</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at 60% 40%, #e0eafc 0%, #cfdef3 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .box {
            background: #f9f9fb;
            border-radius: 22px;
            box-shadow: 0 6px 32px 0 rgba(31, 38, 135, 0.13);
            padding: 48px 38px 38px 38px;
            max-width: 370px;
            width: 100%;
            text-align: center;
        }
        .box h1 {
            color: #1a237e;
            font-size: 2.1rem;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }
        .box p {
            color: #444;
            margin-bottom: 36px;
            font-size: 1.08rem;
        }
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .btn {
            padding: 14px 0;
            border-radius: 10px;
            border: none;
            font-size: 1.08rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(31,38,135,0.07);
        }
        .btn-medico {
            background: linear-gradient(90deg, #007bff 60%, #5bc0f7 100%);
            color: #fff;
        }
        .btn-medico:hover {
            background: linear-gradient(90deg, #0056b3 60%, #3a9ad9 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .btn-paciente {
            background: linear-gradient(90deg, #28a745 60%, #7be495 100%);
            color: #fff;
        }
        .btn-paciente:hover {
            background: linear-gradient(90deg, #1e7e34 60%, #4fd67b 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .btn-enfermeiro {
            background: linear-gradient(90deg, #a79f28ff 60%, #e4d17bff 100%);
            color: #fff;
        }
        .btn-enfermeiro:hover {
            background: linear-gradient(90deg, #7e781eff 60%, #d6cd4fff 100%);
            transform: translateY(-2px) scale(1.03);
        }
    </style>
</head>
<body>
    <div class="box"> 
        <h1>Gerenciamento</h1>
        <p>Bem-vindo! Escolha uma opção para Cadastro:</p>
        <div class="btn-group">
            <a href="{{ route('med.create') }}" class="btn btn-medico">Cadastrar novo Médico</a>
            <a href="{{ route('paci.create') }}" class="btn btn-paciente">Cadastrar novo Paciente</a>
            <a href="{{ route('enfermeiro.create')}}" class="btn btn-enfermeiro">Cadastrar novo Enfermeiro</a>
        </div>
    </div>
</body>
</html>