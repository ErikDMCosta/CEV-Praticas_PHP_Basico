<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 15 - 02 Exercício</title>
</head>
<body>
<div>
    <?php
    
        //require:Caso seu arquivo seja requerido sem o arquivo solicitado seria interrompido a carga do código.

        //require "funcoes2.php";

        //include: Caso queira incluir alguma coisa em que não irá afetar de maneira alguma, pois caso  o arquivo não seja encontrando ele continuara a carga do código.

        //include "funcoes2.php";

        include "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostra_Valor(4);
        echo "<h2>Finalizando Programa...</h2>";
    ?>
</div>
</body>
</html>
 
