<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Comprovante de Atividade</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h2 {
            margin: 0;
            font-size: 18px;
        }

        header p {
            margin: 5px 0;
            font-size: 12px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        footer {
            position: fixed;
            bottom: 10px;
            left: 20px;
            right: 20px;
            text-align: center;
            font-size: 11px;
            color: #666;
        }
    </style>
</head>
<body>

<header>
    <h2>INSTITUTO FEDERAL DO PARANÁ - Câmpus Paranaguá</h2>
    <p>Rua Antônio Carlos Rodrigues, 453 - Porto Seguro, Paranaguá - PR | 83215-750 – Brasil</p>
</header>

<h1>Comprovante de Atividade</h1>

<table>
    <tr>
        <th>Aluno</th>
        <td>{{ $comprovante->aluno->nome }}</td>
    </tr>
    <tr>
        <th>Atividade</th>
        <td>{{ $comprovante->atividade }}</td>
    </tr>
    <tr>
        <th>Horas</th>
        <td>{{ $comprovante->horas }}</td>
    </tr>
    <tr>
        <th>Categoria</th>
        <td>{{ $comprovante->categoria->nome }}</td>
    </tr>
    <tr>
        <th>Data de Criação</th>
        <td>{{ \Carbon\Carbon::parse($comprovante->created_at)->format('d/m/Y H:i') }}</td>
    </tr>
</table>

<footer>
    Documento gerado automaticamente pelo sistema SIGAC - IFPR Câmpus Paranaguá
</footer>

</body>
</html>
