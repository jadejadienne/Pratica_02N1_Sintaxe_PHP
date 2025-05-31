<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entrada de Dados Repetitiva</title>
</head>
<body>

    <h1>Simulação de Entrada de Dados Repetitiva</h1>

    <?php
  
    $entradas = [5, 3, 8, 2, 0, 7, 9]; 
    $index = 0;
    $valor = null;

    do {
        $valor = $entradas[$index];
        echo "<p>O usuário digitou: <strong>$valor</strong></p>";
        $index++;
    } while ($valor != 0 && $index < count($entradas));

    echo "<h3>Valor 0 digitado. Encerrando a entrada de dados.</h3>";
    ?>

</body>
</html>
