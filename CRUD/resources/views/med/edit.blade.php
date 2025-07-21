<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

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
            color: #f39c12;
            text-align: center;
            margin-bottom: 24px;
            font-size: 2rem;
        }

        label {
            font-weight: 600;
            color: #217dbb;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 16px;
            border-radius: 5px;
            border: 1px solid #e1e4ea;
            font-size: 16px;
        }

        button {
            background: linear-gradient(90deg, #f1c40f 60%, #f39c12 100%);
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            padding: 10px 22px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(241, 196, 15, 0.13);
        }

        button:hover {
            background: linear-gradient(90deg, #e1b70a 60%, #e67e22 100%);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Editar Médico</h1>
        <form action="{{ route('med.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-4">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-4">
                <label for="crm">CRM:</label>
                <input type="text" id="crm" name="crm" value="{{ old('crm', $user->crm) }}" required>
            </div>

            <div class="mb-4">
                <label for="specialty">Especialidade:</label>
                <input type="text" id="specialty" name="specialty" value="{{ old('specialty', $user->specialty) }}" required>
            </div>

            <button type="submit">Salvar</button>
        </form>

        <a href="{{ route('med.index') }}" style="margin-top:18px; color:#3498db; text-decoration:none;">Voltar para lista</a>
    </div>
</body>

</html>