<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 8 - 02 Exercício</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
    ?>
    <br/>
    <a href="aula8-parte2.html" class="botao">Voltar</a>
</div>
</body>
</html>
 