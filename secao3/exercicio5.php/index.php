<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Notas - PWEB1</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Relatório de Notas da diciplina de PWEB1</h1>

    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nome do aluno</th>
            <th>Nota de PWEB1</th>
        </tr>

        <?php

        $alunos = [
            ["matricula" => "2023001859887", "nome" => "Jadienne Costa", "nota" => 9.0],
            ["matricula" => "2023002868787", "nome" => "Thalia Silva", "nota" => 8.7],
            ["matricula" => "2023003746583", "nome" => "Matheus Souza", "nota" => 7.8],
            ["matricula" => "2023004938574", "nome" => "Eduarda Lima", "nota" => 9.0],
            ["matricula" => "2023005848584", "nome" => "Geovanna Mendes", "nota" => 8.5],
            ["matricula" => "2023006848484", "nome" => "Amanda Oliveira", "nota" => 7.2],
            ["matricula" => "2023007847474", "nome" => "Pedro Henrique", "nota" => 6.9],
            ["matricula" => "2023008020208", "nome" => "João Victor", "nota" => 8.0],
            ["matricula" => "2023009938383", "nome" => "Beatriz Pereira", "nota" => 9.3],
            ["matricula" => "2023010837373", "nome" => "Lucas Martins", "nota" => 7.5],
        ];

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>{$aluno['matricula']}</td>";
            echo "<td>{$aluno['nome']}</td>";
            echo "<td>{$aluno['nota']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
