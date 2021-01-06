<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 8 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a " .number_format($rq,2);

    ?>
    <br/>
    <a href="aula8-parte1.html" class="botao">Voltar</a>
</div>
</body>
</html>
 