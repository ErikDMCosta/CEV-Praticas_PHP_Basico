<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 17 - 05 Exercício</title>
</head>
<body>
<div>
    <?php
        // 25º Função str_replace
        $frase = "Gosto de estudar Matemática";
        $novaFrase1 = str_replace("Matemática", "PHP", $frase);
        print"$novaFrase1";
        echo "<br></br>";

        $frase = "Gosto de estudar Matemática";
//Sem o i de ignore da erro não irá realizar a troca para PHP como podemos ver abaixo
        //$novaFrase = str_replace("matemática", "PHP", $frase);    // Aqui!
//Ao adicionar o i de ignore então irá ignorar a formatação caso as strings sejam diferentes
        $novaFrase2 = str_ireplace("matemática", "PHP", $frase);    // Aqui!
        print"$novaFrase2";
        echo "<br></br>";

        $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
        $novaFrase3 = str_ireplace("matemática", "PHP", $frase);    // Aqui!
        print"$novaFrase3";
        echo "<br></br>";
    ?>
</div>
</body>
</html>
 
