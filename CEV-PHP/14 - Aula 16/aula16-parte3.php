<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 16 - 03 Exercício</title>
</head>
<body>
    <div>
        <?php
            // 3º Função wordwrap
            $t = "Aqui temos temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
            //$r = wordwrap($t);
            //$r = wordwrap($t, 8);
            //$r = wordwrap($t, 20);
            $r = wordwrap($t, 5, "<br/>\n", false);
            /*
            false gera quebra por palavra tendo "<br/>\n"
            true sempre que atingir o numéro de letras corta e quebra linha com "<br/>\n"
            */
            echo $r;
            echo "<br><br/>";

            // 4º Função strlen
            $txt = "Curso em Vídeo";
            $tamanho = strlen($txt);
            echo "O tamanho de <strong>$txt</strong> é de <strong>$tamanho</strong> algarismos incluindo os espaços.";
            echo "<br><br/>";

            // 5º Função trim
            $nome = "   José da Silva   ";
            echo(strlen($nome));
            $novo = trim($nome);
            print "<br/>"; // Apenas quebra linha
            echo ($novo);
            print "<br/>"; // Apenas quebra linha
            echo (strlen($novo));
            echo "<br><br/>";
            
            // 6º Função ltrim
            $nome = "   José da Silva   ";
            echo(strlen($nome));
            $novo = ltrim($nome);
            print "<br/>"; // Apenas quebra linha
            echo ($novo);
            print "<br/>"; // Apenas quebra linha
            echo (strlen($novo));
        ?>
    </div>
</body>
</html>
 
