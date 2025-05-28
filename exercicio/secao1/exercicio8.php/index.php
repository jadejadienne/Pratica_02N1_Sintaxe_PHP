<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mudança de Categoria</title>
</head>
<body>
    <?php

    $categoria = "A123";

    echo "<h1>Mudança de Categoria</h1>";
    echo "<p><strong>Valor antes da mudança:</strong> " . $categoria . "</p>";

    $categoria = 456;
    echo "<p><strong>Valor depois da mudança:</strong> " . $categoria . "</p>";
    ?>
</body>
</html>
