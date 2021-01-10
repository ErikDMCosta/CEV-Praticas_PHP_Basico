<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 18 - 07 Exercício</title>
</head>
<body>
<div>
	<pre>
    <?php
        $m1 = array( 3,
                    4,
                    5);
        print_r($m1);

        echo "<br/>";

        $m2 = array( array(6,4),
                     array(4,9),
                     array(3,2));
        //                variável recebe variável
        // variável [linha] [posição] = variável [linha] [posição];
        $m2[0] [1] = $m2[2] [0];
        print_r($m2);
    ?>
	</pre>
</div>
</body>
</html>
 
