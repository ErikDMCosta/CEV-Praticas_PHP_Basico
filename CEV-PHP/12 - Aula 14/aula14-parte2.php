<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 14 - 02 Exercício</title>
</head>
<body>
<div>
    <?php
        function soma ($a, $b) {
            /*
            $soma = $a + $b;
            return $soma;
            */
            return $a + $b;
        }
        /*
        $x = 3;
        $y = 4;
        */
        //$x = -4;
        $x = 3;
        $y = 8;
        $resultado = soma($x, $y);
        echo "A soma entre $x e $y e igual a $resultado";
    ?>
</div>
</body>
</html>
 
