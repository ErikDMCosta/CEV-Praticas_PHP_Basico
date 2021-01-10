<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 16 - 04 Exercício</title>
</head>
<body>
    <div>
        <?php
            // 12º Função chr
            $letra1 = chr(67);
            echo "A letra de código 67 é $letra1 <br/>";
            $letra2 = chr(99);
            echo "A letra de código 99 é $letra2";
            echo "<br></br>";

            print "Fazendo processo reverso logo a baixo";
            echo "<br></br>";
            // 13º Função ord
            $letra3="C";
            $cod1 = ord($letra3);
            print "A letra $letra3 tem o código $cod1 <br/>";
            $letra4="c";
            $cod2 = ord($letra4);
            print "A letra $letra4 tem o código $cod2 <br/>";

        ?>
    </div>
</body>
</html>
 
