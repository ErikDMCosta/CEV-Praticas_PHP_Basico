<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 11 - 03 - Exercício Desafio</title>
</head>
<body>
    <div>
        <?php
            $inicio = $_GET["inicio"];
            $fim = $_GET["final"];
            $passo = $_GET["incremento"];
            echo "<strong>Números inseridos: </strong><br/> Inicio = $inicio <br/> Fim = $fim <br/> Incremento = $passo <br/>";
            echo "<br/><strong>Contagem: </strong>";
            if ($inicio > $fim) {
              while ($inicio >= $fim) {
                  echo " $inicio";
                  $inicio -= $passo;
              }
            } else {
              for ($contador = $inicio; $contador <= $fim; $contador += $passo) {
                  echo " $contador";
              }
            }
            echo "<br><br/><strong>Fim da contagem</strong>";
        ?>
        <br><br/>
            <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>