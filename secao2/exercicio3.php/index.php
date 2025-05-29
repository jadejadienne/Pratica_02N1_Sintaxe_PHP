<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Avaliação</title>
</head>
<body>

    <?php

    $nota1 = 5.5;
    $nota2 = 9.5;

    $media = ($nota1 + $nota2) / 2;

    echo "<h1>Sistema de Avaliação</h1>";
    echo "<p><strong>Nota 1:</strong> $nota1</p>";
    echo "<p><strong>Nota 2:</strong> $nota2</p>";
    echo "<p><strong>Média:</strong> $media</p>";

    if ($media >= 7) {
        echo "<p><strong>Situação:</strong> Aprovado</p>";
    } elseif ($media >= 5 && $media < 7) {
        echo "<p><strong>Situação:</strong> Recuperação</p>";
    } else {
        echo "<p><strong>Situação:</strong> Reprovado</p>";
    }
    ?>

</body>
</html>
