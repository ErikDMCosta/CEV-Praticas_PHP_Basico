<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 10 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        $numerico = isset($_GET["numero"]) ? $_GET["numero"] : 0;
        $operar = isset($_GET["operador"]) ? $_GET["operador"] : 1;
        switch ($operar) {
            case 1:
              $resultado = $numerico * 2;
              break;
            case 2:
              $resultado = $numerico ^ 3;
              break;
            case 3:
              $resultado = sqrt($numerico); // $n ^ (1/2);
              break;
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$resultado</span>";
    ?>
    <br/>
    <a href="aula10-parte1.html" class="botao">Voltar</a>
</div>
</body>
</html>
 