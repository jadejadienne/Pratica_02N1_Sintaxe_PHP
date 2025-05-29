<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
</head>
<body>

    <?php
    $idade = 15;
    if ($idade >= 18) {
        echo "<h1>Controle de Acesso</h1>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Resultado:</strong> Acesso Liberado</p>";
    } else {
        echo "<h1>Controle de Acesso</h1>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Resultado:</strong> Acesso Negado</p>";
    }
    ?>
</body>
</html>
