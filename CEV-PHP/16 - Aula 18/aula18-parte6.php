<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 18 - 06 Exercício</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v = array("nome" => "Ana",
                   "idade" => 23,
                   "peso" => 65.5);
        print_r($v);

      echo "<br/>";

        $v = array("nome" => "Ana",
                   "idade" => 23,
                   "peso" => 65.5);
        foreach ($v as $k => $c) {
            echo "O campo $k possuí o conteúdo $c <br/>";
        }
    ?>
	</pre>
</div>
</body>
</html>
 
