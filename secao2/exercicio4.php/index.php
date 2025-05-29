<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendamento Semanal</title>
</head>
<body>

    <?php
   
    $diaSemana = 5; 

    echo "<h1>Agendamento Semanal</h1>";
    echo "<p><strong>Dia numérico:</strong> $diaSemana</p>";

    switch ($diaSemana) {
        case 1:
            echo "<p><strong>Dia da semana:</strong> Domingo</p>";
            break;
        case 2:
            echo "<p><strong>Dia da semana:</strong> Segunda-feira</p>";
            break;
        case 3:
            echo "<p><strong>Dia da semana:</strong> Terça-feira</p>";
            break;
        case 4:
            echo "<p><strong>Dia da semana:</strong> Quarta-feira</p>";
            break;
        case 5:
            echo "<p><strong>Dia da semana:</strong> Quinta-feira</p>";
            break;
        case 6:
            echo "<p><strong>Dia da semana:</strong> Sexta-feira</p>";
            break;
        case 7:
            echo "<p><strong>Dia da semana:</strong> Sábado</p>";
            break;
        default:
            echo "<p><strong>Dia inválido.</strong> Informe um número de 1 a 7.</p>";
            break;
    }
    ?>

</body>
</html>
