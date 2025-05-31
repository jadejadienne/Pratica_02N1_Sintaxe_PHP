<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Custo Total</title>
</head>
<body>

    <h1>Cálculo de Custo Total</h1>

    <?php
    function custoTotalItem($precoUnitario, $quantidade) {
        return $precoUnitario * $quantidade;
    }

    $itens = [
        ['nome' => 'Cafe', 'preco' => 10.50, 'quantidade' => 1],
        ['nome' => 'Feijão', 'preco' => 33, 'quantidade' => 5],
        ['nome' => 'Bolacha', 'preco' => 21, 'quantidade' => 3],
    ];

    $custoTotal = 0;

    echo "<table border = '1' cellpadding = '5' cellspacing = '0'>";
    echo "<tr><th>Item</th><th>Preço Unitário (R$)</th><th>Quantidade</th><th>Custo Total (R$)</th></tr>";

    for ($i = 0; $i < count($itens); $i++) {
        $item = $itens[$i];
        $totalItem = custoTotalItem($item['preco'], $item['quantidade']);
        echo "<tr>";
        echo "<td>{$item['nome']}</td>";
        echo "<td>" . number_format($item['preco'], 2, ',', '.') . "</td>";
        echo "<td>{$item['quantidade']}</td>";
        echo "<td>" . number_format($totalItem, 2, ',', '.') . "</td>";
        echo "</tr>";

        $custoTotal += $totalItem;
    
    }

    echo "<tr>";
    echo "<td colspan='3' style = 'text-align:right; font-weight:bold;'>Custo Total Geral:</td>";
    echo "<td style='font-weight:bold;'>" . number_format($custoTotal, 2, ',', '.') . "</td>";
    echo "</tr>";
    echo "</table>";
    ?>

</body>
</html>
