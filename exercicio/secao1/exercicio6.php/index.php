<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo do orcamento .</title>
</head>
<body>

    <?php
    $custoMaterial = 250.322;
    $custoMaoDeObra = 160.55;

    $custoTotal = $custoMaterial + $custoMaoDeObra;

    echo "<h1>Orçamentos</h1>";
    echo "<p><strong>Custo do material:</strong> R$ " . number_format($custoMaterial, 2, ',', '.') . "</p>";
    echo "<p><strong>Custo de mão de obra:</strong> R$ " . number_format($custoMaoDeObra, 2, ',', '.') . "</p>";
    echo "<p><strong>Custo Total:</strong> R$ " . number_format($custoTotal, 2, ',', '.') . "</p>";

    ?>
</body>
</html>