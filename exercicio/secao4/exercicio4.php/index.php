<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Média de Notas</title>
</head>
<body>

    <h1>Cálculo da Média Final do Aluno</h1>

    <?php

    function calcularMedia(array $notas) {
        $total = array_sum($notas);
        $quantidade = count($notas);

        if ($quantidade === 0) {
            return 0;
        }

        return $total / $quantidade;
    }
    $notasAluno = [7.5, 8.0, 9.2, 6.8, 7.0];

    $mediaFinal = calcularMedia($notasAluno);

    echo "<p>Notas do aluno: " . implode(", ", $notasAluno) . "</p>";
    echo "<p><strong>Média final:</strong> " . number_format($mediaFinal, 2, ',', '.') . "</p>";
    ?>

</body>
</html>
