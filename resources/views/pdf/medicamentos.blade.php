<!DOCTYPE html>
<html>
    <head>
        <title>
            Relatório de Medicamentos
        </title>
        <style type="text/css">
            table{
                width:80%;
                margin: 0 auto;
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <table>
            <caption><h1>Relatório de Medicamentos</h1></caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do Medicamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicamentos as $med)
                    <tr>
                        <td>{{$med->id}}</td>
                        <td>{{$med->Nome}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>