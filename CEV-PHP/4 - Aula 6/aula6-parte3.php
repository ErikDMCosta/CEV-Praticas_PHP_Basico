<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Refêrencia</title>
</head>
<body>
<div>
    <?php
        // Sem & para referência
        echo "Entre A e B <strong>NÃO POSSUI</strong> ligação de referência";
        $a = 3;
        $b = $a;
        $b += 5;
        echo "<br/>A variável A vale $a";
        echo "<br/>A variável B vale $b <br/>";

        /// Com & para referência
        echo "<br/>Entre C e D <strong>POSSUI</strong> ligação de referência";
        $c = 3;
        $d = &$c;
        $d += 5;
        echo "<br/>A variável C vale $c";
        echo "<br/>A variável D vale $d";

        ?>
</div>    
</body>
</html>