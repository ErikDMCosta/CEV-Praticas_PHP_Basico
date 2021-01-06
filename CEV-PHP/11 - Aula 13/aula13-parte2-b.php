<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 13 - 02 - B - Exercício</title>
</head>
<body>
<div>
    <?php
        $numero = isset($_GET["num"])?$_GET["num"]:1;
        for ($count = 1; $count <= 10; $count++) {
            $result = $numero * $count;
            echo "$numero x $count = $result <br/>";
        }
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br><br/>
</div>
</body>
</html>
 
