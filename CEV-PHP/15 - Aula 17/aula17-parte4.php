<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 17 - 04 Exercício</title>
</head>
<body>
<div>
    <?php
        // 23º Função str_pad
        $nome1 = "Erik";
        $novo1 = str_pad($nome1, 30, "=", STR_PAD_RIGHT);
        print("</br>O aluno $novo1 é lindo!");
        /*
        $nome2 = "Erik";
        $novo2 = str_pad($nome2, 30, " ", STR_PAD_CENTER);  // Não funcionou...
        print("O aluno $novo2 é lindo!");
        */
        $nome3 = "Erik";
        $novo3 = str_pad($nome3, 30, "=", STR_PAD_LEFT);
        print("</br>O aluno $novo3 é lindo!");
        echo "<br></br>";

        // 24º Função str_repeat
        $txt = str_repeat("Php", 5);
        print "O texto gerado foi $txt";
        print "str_repeat("-",20)";
        echo "<br></br>";
    ?>
</div>
</body>
</html>
 
