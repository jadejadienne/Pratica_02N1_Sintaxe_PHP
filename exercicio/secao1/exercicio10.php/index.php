<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contagem de Caracteres do Resumo</title>
</head>
<body>
    <?php
    $resumo = "O Instituto Federal de Educação, Ciência e Tecnologia do Ceará é uma instituição pública
    que oferece ensino de qualidade, gratuito e voltado para a formação técnica e superior. Eu, jadienne aluna 
    do primeiro semstre no curso EAD em administraçao e no sétimo semestre de sistemas, vejo que a instituição
    se preocupa muito em oferecer um ensino de qualidaes para alunos, preparando os  estudantes para o mercado
    de trabalho e  para projetos de pesquisa. O IFCE valoriza a extensão, permitindo que a gente leve
    conhecimento e ações para a comunidade. Estudar no ifce é uma oportunidade  incrível, pois temos acesso a
    laboratórios, projetos, bolsas de pesquisa e extensão, os professores são excelentes, capacitados e estão 
    sempre dispostos a nos ajudar. O IFCE tem sido fundamental na minha formação profissional e academica, 
    além do conhecimento técnico, também desenvolvemos habilidades sociais, pensamento crítico e trabalho em
    equipe.";

    $quantidadeCaracteres = strlen($resumo);

    echo "<h1>Contagem de Caracteres do Resumo</h1>";
    echo "<p><strong>Resumo:</strong> $resumo</p>";
    echo "<p><strong>Total de caracteres:</strong> $quantidadeCaracteres</p>";
    ?>
</body>
</html>
