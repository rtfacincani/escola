<!DOCTYPE html>
<html>
<head>
    <title>
        Relatório de Alunos Cadastrados
    </title>
    <style type="text/css">
        table{
            width:80%;
            right: 0;
            left: 0;
            border: 1px solid;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Relatório de Alunos Cadastrados</h1></caption>
    <thead>
    <tr>
        <th>Matrícula</th>
        <th>Nome do Aluno</th>
    </tr>
    </thead>
    <tbody>
    @foreach($alunos as $al)
    <tr>
        <td>{{$al->Matricula}}</td>
        <td>{{$al->Nome}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>