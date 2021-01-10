<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 19 - 04 Exercício</title>
</head>
<body>
<div>
    <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v); // Antes do sort
            echo "<br/>";
            
            sort($v); // Colocara os elementos do vetor em ordem
            print_r($v); // Depois do sort
            echo "<br/>";
            
            $v = array("A", "J", "M", "X", "K");
            rsort($v); // Colocara os elementos do vetor em ordem reversa
            print_r($v); // Depois de aplicar reverso com rsort
            echo "<br/>";

            $v = array("A", "J", "M", "X", "K");
            asort($v); // Colocara os elementos em ordem mantendo suas posições originais
            print_r($v); // Depois de aplicar ordem com posição original usando asort
            echo "<br/>";

            $v = array("A", "J", "M", "X", "K");
            arsort($v); // Elementos em ordem mantendo suas posições originais de forma reversa
            print_r($v); // Em ordem com posição original usando arsort de forma reversa
            echo "<br/>";

            $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
            ksort($v); // Elementos em ordem a partir das posições originais
            print_r($v); // Em ordem partir das posições originais usando ksort
            echo "<br/>";

            $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
            krsort($v); // Elementos em ordem a partir das posições originais de forma reversa
            print_r($v); // Em ordem partir das posições originais usando krsort de forma reversa
            echo "<br/>";

        ?>
    </pre>
</div>
</body>
</html>
 
