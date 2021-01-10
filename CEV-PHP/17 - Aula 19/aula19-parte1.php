<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 19 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
    ?>
    <br/>
    <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            echo "<br/>";
            var_dump($v);
            echo "<br/>";
            print("O vetor tem " . count($v) . " elementos.");
            $tot = count($v);
            echo "<br/>";
            print("O vetor tem $tot elementos.");
        ?>
    </pre>
</div>
</body>
</html>
 
