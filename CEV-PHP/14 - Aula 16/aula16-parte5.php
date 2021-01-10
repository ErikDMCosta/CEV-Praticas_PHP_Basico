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
            // 9º Função explode
            $site = "Curso em Vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);
            echo "<br><br/>";

            // 10º Função str_split
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r($vetor);
            echo "<br><br/>";

            // 11º Função implode
            $vetor2[0] = "Curso";
            $vetor2[1] = "em";
            $vetor2[2] = "Vídeo";
            $texto = implode("#", $vetor2); // Da pra usar join em vez de implode
            print_r($texto);
            echo "<br><br/>";
        ?>
    </div>
</body>
</html>
 
