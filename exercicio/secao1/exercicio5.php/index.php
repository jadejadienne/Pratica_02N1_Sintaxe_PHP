<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preço de venda e tipo de dado</title>
</head>
<body>

    <?php
    $precoUnitario = 48.60;

    echo "<h1>Informações do produto</h1>";
    echo "<p><strong>Preço Unitário:</strong> R$ " . number_format($precoUnitario, 2, ',', '.') . "</p>";
    
    echo "<h2>var_dump():</h2>";
    var_dump($precoUnitario);
    
    echo "<h3>gettype():</h3>";
    echo "<p>Tipo da variável: " . gettype($precoUnitario) . "</p>";
    ?>
</body>
</html>