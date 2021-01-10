<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 16 - 01 Exercício</title>
</head>
<body>
    <div>
        <?php
            // 2º Função printf
            $p = "Leite";
            $pr = 4.5;
            echo "O $p custa R$ $pr" . " -- mostrando valores de forma simples<br/>";
            
            echo "O $p custa R$ " . number_format($pr, 2) . " -- com number_format<br/>";

            //printf ("O .. custa R$ ..", $p, $pr);
            printf ("O %s custa R$ %.2f", $p, $pr);
            echo " -- com função printf";

        ?>
    </div>
</body>
</html>
 
