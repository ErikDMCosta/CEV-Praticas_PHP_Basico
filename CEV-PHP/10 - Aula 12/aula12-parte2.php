<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 12 - 02 Exercício</title>
</head>
<body>
<div>
    <?php
      $valor = isset($_GET["val"])?$_GET["val"]:1;
      echo "<h1>Calculando o Fatorial de $valor</h1>";
      $contador = $valor;
      $fatorial = 1;
      do {
          $fatorial*=$contador;
          $contador--;
      } while ($contador >= 1);
      echo "<h2>$valor != $fatorial </h2>";
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 
