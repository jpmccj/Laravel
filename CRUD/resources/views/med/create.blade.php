<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-top: 36px;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        h2 {
            text-align: center;
            margin-bottom: 18px;
            font-size: 18px;
        }

        h2 a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.2s;
        }

        h2 a:hover {
            color: #217dbb;
            text-decoration: underline;
        }

        .lista-nav-links {
            display: flex;
            justify-content: center;
            gap: 18px;
            list-style: none;
            padding: 0;
            margin-bottom: 18px;
        }

        .nav-link, .btn-primary {
            color: #fff;
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            padding: 8px 22px;
            border-radius: 5px;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.08);
            border: none;
            display: inline-block;
        }

        .nav-link:hover, .btn-primary:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
            color: #fff;
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.13);
        }

        form {
            background: #fff;
            max-width: 420px;
            margin: 32px auto;
            padding: 32px 28px 24px 28px;
            border-radius: 10px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.10);
        }

        .mb-4 {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #34495e;
            font-weight: 600;
            font-size: 15px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 4px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 15px;
            background: #f9fafb;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 2px #eaf6fb;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
            color: #fff;
            border: none;
            padding: 13px 0;
            border-radius: 5px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.08);
        }

        button[type="submit"]:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.13);
        }

        p {
            text-align: center;
            font-size: 15px;
        }

        .alert-success {
            color: #155724;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 16px;
            text-align: center;
        }

        .alert-error {
            color: #721c24;
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 16px;
            text-align: center;
        }
    </style>
</head>

<body>


    <h1>Cadastrar Medico</h1>


    <h2><a href="{{ route('dashboard') }}">Medicos</a></h2>
    <ul class="lista-nav-links">
        <li><a href="{{ route('med.index') }}" class="btn-primary">Listar usuarios</a></li>
        <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
    </ul>

    @if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
    @endif
    @if(session('error'))
    <p style="color: red;">
        {{ session('error') }}
    </p>
    @endif



    <!-- o form action manda para o lugar que quero que esses dados vão-->
    <form action="{{ route('med.store') }}" method="POST">
    @csrf
        <div class="mb-4">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Nome completo" value="{{ old('name') }}" required><br><br>
        </div>

        <div class="mb-4">
        <label for="email">E-maill:</label>
        <input type="email" id="email" name="email" placeholder="Email do medico" value="{{ old('email') }}" required><br><br>
        </div>

        <div class="mb-4">
        <label for="crm">CRM:</label>
        <input type="text" id="crm" name="crm" placeholder="CRM do medico" value="{{ old('crm') }}" required><br><br>
        </div>

        <div class="mb-4">
        <label for="specialty">Especialidade:</label>
        <input type="text" id="specialty" name="specialty" placeholder="Especialidade do medico" value="{{ old('especialty') }}" required><br><br>
        </div>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>