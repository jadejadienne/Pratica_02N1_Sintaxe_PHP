<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Elegibilidade</title>
</head>
<body>

<?php

function verificarElegibilidade($idade) {
    if ($idade >= 18) {
        return "Elegível (Maior de Idade)";
    } else {
        return "Não Elegível (Menor de Idade)";
    }
}

$idades = [15, 17, 18, 20, 25];

for ($i = 0; $i < count($idades); $i++) {
    $idade = $idades[$i];
    $status = verificarElegibilidade($idade);
    echo "<p>Idade: <strong>$idade</strong> anos - Status: <strong>$status</strong></p>";
}
?>

</body>
</html>
