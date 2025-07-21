<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
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
        .nav-link,
        .btn-success {
            color: #fff;
            background: linear-gradient(90deg, #27ae60 60%, #2ecc71 100%);
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
        .nav-link {
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
        }
        .nav-link:hover,
        .btn-success:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
            color: #fff;
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.13);
        }
        .btn-visualizar {
            color: #fff;
            background: linear-gradient(90deg, #3498db 60%, #217dbb 100%);
            font-weight: 600;
            font-size: 14px;
            padding: 6px 16px;
            border-radius: 4px;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
            margin: 0 2px;
            display: inline-block;
            text-decoration: none;
        }
        .btn-visualizar:hover {
            background: linear-gradient(90deg, #217dbb 60%, #3498db 100%);
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.13);
        }
        .btn-editar {
            color: #fff;
            background: linear-gradient(90deg, #f1c40f 60%, #f39c12 100%);
            font-weight: 600;
            font-size: 14px;
            padding: 6px 16px;
            border-radius: 4px;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
            margin: 0 2px;
            display: inline-block;
            text-decoration: none;
        }
        .btn-editar:hover {
            background: linear-gradient(90deg, #e1b70a 60%, #e67e22 100%);
            box-shadow: 0 2px 8px rgba(241, 196, 15, 0.13);
        }
        .btn-apagar {
            color: #fff;
            background: linear-gradient(90deg, #e74c3c 60%, #c0392b 100%);
            font-weight: 600;
            font-size: 14px;
            padding: 6px 16px;
            border-radius: 4px;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
            margin: 0 2px;
            display: inline-block;
            text-decoration: none;
        }
        .btn-apagar:hover {
            background: linear-gradient(90deg, #c0392b 60%, #e74c3c 100%);
            box-shadow: 0 2px 8px rgba(231, 76, 60, 0.13);
        }
        .table-container {
            max-width: 950px;
            margin: 32px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.10);
            padding: 24px 18px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        .table-header {
            background: #3498db;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            padding: 12px 0;
            text-align: center;
        }
        .table-row:nth-child(even) {
            background: #f4f7fa;
        }
        .table-cell {
            padding: 10px 8px;
            text-align: center;
            border-bottom: 1px solid #e1e4ea;
            font-size: 15px;
            color: #2c3e50;
        }
        .table-actions {
            padding: 10px 8px;
            text-align: center;
            font-size: 15px;
        }
        .alert-error {
            color: #721c24;
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            padding: 10px;
            margin: 16px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Lista dos medicos</h1>
    <h2><a href="{{ route('dashboard') }}">Medicos</a></h2>
   
    <ul class="lista-nav-links">
        <li><a href="{{ route('med.create') }}" class="btn-success">Cadastrar</a></li>
        <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
    </ul>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr class="table-header">
                    <th class="table-header">ID:</th>
                    <th class="table-header">Nome:</th>
                    <th class="table-header">E-maill:</th>
                    <th class="table-header">CRM:</th>
                    <th class="table-header">Especialidade:</th>
                    <th class="table-header">Ações</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @forelse($users as $user)
                <tr class="table-row">
                    <td class="table-cell">{{ $user->id }}</td>
                    <td class="table-cell">{{ $user->name }}</td>
                    <td class="table-cell">{{ $user->email }}</td>
                    <td class="table-cell">{{ $user->crm }}</td>
                    <td class="table-cell">{{ $user->specialty }}</td>
                    <td class="table-cell">
                        <form action="{{ route('med.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-apagar" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                        </form>
                        <a href="{{ route('med.edit', $user->id) }}" class="btn-editar">Editar</a>
                        <a href="{{ route('med.show', $user->id) }}" class="btn-visualizar">Visualizar</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="alert-error">
                            Nenhum usuario encontrado!
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>






</body>

</html>