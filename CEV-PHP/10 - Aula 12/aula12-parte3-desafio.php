<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 12 - 03 Exercício Desafio</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["numero"];
        echo "<h1>Mostrando a Tabuada de $valor</h1>";
        $contador = 1;
        do {
            $conta = $contador * $valor;
            echo "$valor x $contador = $conta <br/>";
            $contador++;
        } while ($contador <= 10);
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    <br></br>
</div>
</body>
</html>
 
