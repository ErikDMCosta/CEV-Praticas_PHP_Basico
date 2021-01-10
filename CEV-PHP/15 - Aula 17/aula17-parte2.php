<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 17 - 02 Exercício</title>
</head>
<body>
<div>
    <?php
        // 16º Função ucfirst
        $nome1 = ucfirst("erik de moraes costa"); // Primeira letra fica em maiúscula
        echo "Seu nome é $nome1" . "<br/>";
        $nome2 = "ErIk De MoRaEs CoStA";
        echo "Seu nome é " . ucfirst($nome2) . "<br/>";
        echo "Seu nome é " . ucfirst(strtolower($nome2));
        echo "<br></br>";

        // 17º Função ucfirst
        $nome = "erik de moraes costa";
        print ("Seu nome é " . ucwords($nome)); // string ao contrario
        echo "<br></br>";

        // 18º Função strrev
        $nome = "erik de moraes costa";
        print (strrev($nome));
        echo "<br></br>";

        // 19º Função strpos
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        print("Encontrando na posição $pos");
        echo "<br></br>";

        // 20º Função stripos
        $frase = "Estou aprendendo PHP";  // "PHP" != "php" 
        $pos = stripos($frase, "php");  // "PHP" != "php" 
        // Coloca apenas um i de ignore caso a formatação da busca não corresponda
        print("Encontrando na posição $pos");
        echo "<br></br>";
    ?>
</div>
</body>
</html>
 
