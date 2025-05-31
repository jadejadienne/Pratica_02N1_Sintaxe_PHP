<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Total de Vendas do Mês</title>
</head>
<body>

    <h1>Total de Vendas do Mês</h1>

    <?php
    $totalVendas = 0;
    $min = 50;
    $max = 5000;

    echo "<h3>Vendas diárias:</h3><ul>";

    for ($dia = 1; $dia <= 100; $dia++) {
        $valorVenda = rand($min * 100, $max * 100) / 100;
        
        echo "<li>Dia $dia: R$ " . number_format($valorVenda, 2, ',', '.') . "</li>";
        $totalVendas += $valorVenda;
    }

    echo "</ul>";

    echo "<h2>Total de vendas no mês: R$ " . number_format($totalVendas, 2, ',', '.') . "</h2>";
    ?>

</body>
</html>
