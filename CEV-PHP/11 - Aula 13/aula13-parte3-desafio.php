<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 13 - 03 Exercício Desafio</title>
</head>
<body>
    <div>
        <?php
          $value =  isset($_GET["numerico"])?$_GET["numerico"]:1;
          echo "<h1>Analisando o número $value ...</h1>";
          echo "<h3>Valores múltiplos: ";
          $multiple = 0;
          for ($count = 1; $count <= $value; $count++) {
           if ($value % $count == 0) {
             $multiple++;
             echo "$count ";
           }
         }
         echo "<br></br>Total de múltiplos: $multiple </h3>";
         echo "<h2> Resultado: $value <span class='foco'>";
         if ($multiple <= 2) {
           echo "É PRIMO! ";
         } else {
           echo "NÃO É PRIMO! ";
         }
          echo "</span></h2>";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        <br><br/>
    </div>
</body>
</html>