<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Médico</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 420px;
            width: 100%;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.10);
            padding: 36px 28px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 24px;
            font-size: 2rem;
        }
        .info-list {
            width: 100%;
            margin-bottom: 18px;
        }
        .info-list p {
            font-size: 17px;
            margin: 10px 0;
            color: #2c3e50;
            text-align: left;
            padding-left: 10px;
        }
        strong {
            color: #217dbb;
        }
        a {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 22px;
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.13);
        }
        a:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Visualizar Médico</h1>
        <div class="info-list">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>CRM:</strong> {{ $user->crm }}</p>
            <p><strong>Especialidade:</strong> {{ $user->specialty }}</p>
        </div>
        <a href="{{ route('med.index') }}">Voltar para lista</a>
    </div>
</body>
</html>