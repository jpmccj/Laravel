<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Médicos</title>
    <style>
        body {
            background: #f4f7fa;
            color: #2c3e50;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            background: #fff;
            padding: 48px 36px 36px 36px;
            border-radius: 14px;
            box-shadow: 0 6px 24px rgba(44, 62, 80, 0.13);
            text-align: center;
            max-width: 420px;
            width: 100%;
        }
        .title h1 {
            font-size: 2.7rem;
            margin-bottom: 28px;
            letter-spacing: 1.5px;
            color: #3498db;
            font-weight: 700;
        }
        .subtitle {
            font-size: 1.15rem;
            color: #34495e;
            margin-bottom: 28px;
        }
        .links {
            margin-top: 18px;
            display: flex;
            justify-content: center;
            gap: 18px;
        }
        .links a {
            display: inline-block;
            padding: 12px 32px;
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.08);
        }
        .links a:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.13);
            transform: translateY(-2px) scale(1.03);
        }
        .footer {
            margin-top: 32px;
            font-size: 0.95rem;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="flex-center">
        <div class="content">
            <div class="title m-b-md">
                <h1>Cadastro de Médicos</h1>
            </div>
            <div class="subtitle">
                Bem-vindo ao sistema de gerenciamento de médicos.<br>
                Utilize as opções abaixo para listar ou cadastrar novos médicos.
            </div>
            <div class="links">
                <a href="{{ route('med.index') }}">Listar Médicos</a>
                <a href="{{ route('med.create') }}">Cadastrar Médico</a>
            </div>
            <div class="footer">
                &copy; {{ date('Y') }} Sistema de Médicos
            </div>
        </div>
    </div>