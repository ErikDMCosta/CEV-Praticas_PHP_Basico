<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 18 - 05 Exercício</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v = array( 3 => 5,
                    1 => 9, 
                    0 => 8,
                    7 => 7);
        print_r($v);
        echo "<br/>";
        
// A linha de baixo destrói o elemento o índice e o conteúdo da 0º posição
        unset($v[0]);
        print_r($v);
    ?>
	</pre>
</div>
</body>
</html>
 
