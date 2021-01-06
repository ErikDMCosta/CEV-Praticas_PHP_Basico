<!DOCTYPE html>
<html>
<head>
  <?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
  ?>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 8 - 03 Exercício</title>
  <style>
    span.texto {
      font-size: <?php echo $tam; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br/>
    <a href="aula8-parte3.html" class="botao">Voltar</a>
</div>
</body>
</html>
 