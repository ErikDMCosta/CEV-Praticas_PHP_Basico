<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 19 - 02 Exercício</title>
</head>
<body>
<div>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                echo "<br/>";
                $v[] = "O";
                print_r($v);
    
                $v = array("A", "J", "M", "X", "K");
                
                // Ira adicionar um elemento solicitado ultima posição do vetor
                array_push($v, "O"); 
                print_r($v);
                echo "<br/>";
    
                // Irá eliminar todos os elementos 
                array_pop($v); 
                print_r($v);
                echo "<br/>";
            ?>
        </pre>
    </pre>
</div>
</body>
</html>
 
