<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 17 - 03 Exercício</title>
</head>
<body>
<div>
    <?php
        // 21º Função substr_count
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase, "PHP");
        print("PHP encontrando $cont vezes");
        echo "</br>";

        // 22º Função substr
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        echo "<br/>$sub ";
        $sub = substr($site, 6);
        echo "<br/>$sub ";
        $sub = substr($site, -5);
        echo "<br/>$sub ";
        $sub = substr($site, -5, 2);
        echo "<br/>$sub ";
        echo "<br></br>";
    ?>
</div>
</body>
</html>
 
