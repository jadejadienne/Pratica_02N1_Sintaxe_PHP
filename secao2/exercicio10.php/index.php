<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Acesso</title>
</head>
<body>

    <?php

    $usuarioAtivo = true;          
    $isAdmin = true;              

    echo "<h1>Verificação de Acesso</h1>";

    echo "<p><strong>Status do Usuário:</strong> " . ($usuarioAtivo ? "Ativo" : "Inativo") . "</p>";
    echo "<p><strong>Permissão:</strong> " . ($isAdmin ? "Administrador" : "Usuário comum") . "</p>";

   
    if ($usuarioAtivo && $isAdmin) {
        echo "<p><strong>Acesso Total Concedido </strong></p>";
    } else {
        echo "<p><strong>Acesso Negado </strong></p>";
    }
    ?>

</body>
</html>
