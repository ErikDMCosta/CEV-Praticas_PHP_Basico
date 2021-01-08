<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 14 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        function soma ($a, $b) {
            $soma = $a + $b;
            echo "<p>A soma vale $soma</p>";
        }

        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</div>
</body>
</html>
 
