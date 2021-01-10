<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 19 - 03 Exercício</title>
</head>
<body>
<div>
    <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            
            print_r($v); // Mostrar o vetor de cima na tela
            echo "<br><br/>";
          
            array_unshift($v, "O"); // Adicionar "O" na 1º posição
            print_r($v);
            echo "<br><br/>";

            array_shift($v); // Eliminar o valor da 1º posição
            print_r($v);
            echo "<br><br/>";

        ?>
    </pre>
</div>
</body>
</html>
 
