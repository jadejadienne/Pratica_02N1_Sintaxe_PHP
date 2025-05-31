<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>

<?php

function ehPar($codigo) {
    if ($codigo % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$numero1 = 10;
$numero2 = 7;

$resultado1 = ehPar($numero1);
$resultado2 = ehPar($numero2);

echo "Número $numero1 é " . ($resultado1 ? "par" : "ímpar") . ".<br>";
echo "Retorno da função ehPar($numero1): " . ($resultado1 ? "true" : "false") . ".<br><br>";

echo "Número $numero2 é " . ($resultado2 ? "par" : "ímpar") . ".<br>";
echo "Retorno da função ehPar($numero2): " . ($resultado2 ? "true" : "false") . ".<br>";
?>

</body>
</html>
