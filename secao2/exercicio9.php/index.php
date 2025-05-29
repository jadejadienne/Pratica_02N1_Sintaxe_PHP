<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário</title>
</head>
<body>

    <?php
  
    $cargo = "Desenvolvedor"; 

    echo "<h1>Folha de Pagamento</h1>";
    echo "<p><strong>Cargo:</strong> $cargo</p>";

    switch (strtolower($cargo)) {
        case "desenvolvedor":
            $salario = 5000;
            echo "<p>Salário base: R$ " . number_format($salario, 2, ',', '.') . "</p>";
            break;
        case "designer":
            $salario = 4000;
            echo "<p>Salário base: R$ " . number_format($salario, 2, ',', '.') . "</p>";
            break;
        case "gerente":
            $salario = 7000;
            echo "<p>Salário base: R$ " . number_format($salario, 2, ',', '.') . "</p>";
            break;
        default:
            echo "<p>Cargo não cadastrado na tabela de salários.</p>";
            break;
    }
    ?>

</body>
</html>
