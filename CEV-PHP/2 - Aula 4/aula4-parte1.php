<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 4 - Tipos</title>
</head>
<body>
<div>
    <?php
        $numero = 4;
        //$nome = "Érik";
        //$nome = (string)"Érik"; //Érik
        //$nome = (int)"Érik";  // 0
        //$nome = (int)"10Érik";  // Considera 10 por que a string começa com 10
        //$nome = (int)"Érik10";  // O número tem que estar logo no ínicio
        $nome = "Érik<br>";
        $numero = 4.5;
        echo $nome;
        echo $numero;

        /*----- Estudando Concatenação em PHP -----*/
        $nome = "Érik";
        $idade = 21;

        echo "<br>".$nome."tem".$idade."anos."; // Usando concatenação para mostrar valor sem espaços nas strings

        echo "<br>".$nome." tem ".$idade." anos."; // Usando concatenação para mostrar valor com espaços nas strings 

        echo "<br>$nome tem $idade anos."; // Usando cifrão para mostrar valor 

        echo '<br>$nome tem $idade anos.'; // Usando aspas simples não funciona
        
         // Atenção existe diferença entre  variáveis maiúsculas e minúsculas

    ?>
</div>
</body>
</html>