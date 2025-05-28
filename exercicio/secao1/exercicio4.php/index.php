<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pedido em processamento</title>
 </head>
 <body>

    <?php
    $pedidopedente = false;

    echo "<h1>Status do pedido</h1>";
    if ($pedidopedente) {
        echo "<p>Seu pedido foi enviado com sucesso!</p>";
    } else {
        echo "<p>Seu pedido ainda está em procesamento logistico. Aguarde o envio.</p>";
    }

    ?>
</body>
</html>