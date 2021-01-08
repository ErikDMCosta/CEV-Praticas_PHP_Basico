<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 14 - 03 Exercício</title>
</head>
<body>
<div>
    <?php
        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i = 0; $i < $t; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
        $resultado = soma(3, 5, 2);
        echo "A soma dos valores e $resultado";
        $resultado = 0;
        $resultado = soma(3, 5, 2, 8, 9, 4);
        echo "<br/>A soma dos valores e $resultado";
    ?>
</div>
</body>
</html>
 
