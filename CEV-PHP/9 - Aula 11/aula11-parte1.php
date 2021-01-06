<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 11 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
    /*
      echo "Os número são:";
      $contador = 1;
      while ($contador <= 10) {
        echo " $contador";
        $contador++;
      }
    */
      /*
      echo "Os número são:";
      $contador = 10;
      while ($contador >= 1) {
        echo " $contador";
        $contador--;
      }
      */

      echo "Os número são:";
      $contador = 10;
      while ($contador >= 0) {
        echo " $contador";
        $contador-=2;   // c = c - 2
      }
    ?>
</div>
</body>
</html>
 