<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 13 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        for ($contador = 1; $contador <= 10; $contador++) {
            echo "$contador ";
        }
        echo "<br/>";
        for ($contador = 10; $contador >= 1; $contador--) {
          echo "$contador ";
        }
        echo "<br/>";
        for ($contador = 1; $contador <= 100; $contador+=5) {
          echo "$contador ";
        }
        echo "<br/>";
        for ($contador = 1; $contador <= 50; $contador+=5) {
          echo "$contador ";
        }
        echo "<br/>";
        for ($contador = 20; $contador >= 1; $contador-=2) {
          print "$contador ";
        }
    ?>
</div>
</body>
</html>
 
