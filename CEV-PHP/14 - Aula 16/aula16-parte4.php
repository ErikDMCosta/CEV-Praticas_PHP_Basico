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
            // 8º Função str_word_count
            $frase1 = "Eu vou estudar PHP";
            
            $cont1 = str_word_count($frase1, 0);
            echo("A frase ($frase1) possuí " . $cont1 . " palavras <br/>");
            $cont1 = str_word_count($frase1, 1);
            echo $cont1 . "<br/>";
            print_r($cont1);
            echo "<br/>";
            $cont1 = str_word_count($frase1, 2);
            print_r($cont1);

            $frase2 = "Eu vou estudar PHP agora";
            $cont2 = str_word_count($frase2, 0);
            echo("<br><br/>A frase ($frase2) possuí " . $cont2 . " palavras <br/>");
            $cont2 = str_word_count($frase2, 1);
            echo $cont2 . "<br/>";
            print_r($cont2);
            echo "<br/>";
            $cont2 = str_word_count($frase2, 2);
            print_r($cont2);
        ?>
    </div>
</body>
</html>
 
