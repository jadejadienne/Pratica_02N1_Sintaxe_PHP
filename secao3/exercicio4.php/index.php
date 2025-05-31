<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Processamento Limitado</title>
</head>
<body>

    <h1>Processamento de Itens</h1>

    <?php
 
    $itens = range(1, 100);

    for ($i = 0; $i < 30; $i++) {
        echo "<p>Processando o item: " . $itens[$i] . "</p>";
    }

    echo "<h3>Limite de processamento atingido é 30 itens. Encerrando para não ter sobrecarga.</h3>";
    ?>
</body>
</html>
