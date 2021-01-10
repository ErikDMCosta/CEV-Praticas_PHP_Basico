<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 18 - 04 Exercício</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v1 = array(0 => 5,
                    1 => 9, 
                    2 => 8,
                    3 => 7);
        print_r($v1);

        echo "<br></br>";

        $v2 = array(3 => 5,
                    1 => 9, 
                    0 => 8,
                    7 => 7);
        print_r($v2);

        echo "<br></br>";

        $v3 = array(1 => "A",
                    3 => "B", 
                    6 => "C",
                    8 => "D");
        $v3[] = "E";    
        print_r($v3);

        unset($v3[9]);  // Destrói o elemento o índice e o conteúdo da 9º posição
        print_r($v3);
    ?>
	</pre>
</div>
</body>
</html>
 
