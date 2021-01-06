<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 9 - 04 Exercício</title>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "[VALOR NÃO DIGITADO]";
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "[VALOR NÃO DIGITADO]";
        $media = ($n1 + $n2) / 2;
        $situacao;
        echo "A média entre $n1 e $n2 é igual a $media<br/>";
        if ($media >= 7) {
          $situacao = "aprovado";
        } else {
          $situacao = "reprovado";
        }
        echo "Situação do aluno: $situacao"  
    ?>
    <br/>
    <a href="aula9-parte4-desafio.html" class="botao">Voltar</a>
</div>
</body>
</html>
 