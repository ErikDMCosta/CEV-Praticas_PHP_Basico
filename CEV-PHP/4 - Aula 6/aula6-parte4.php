<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variáveis Variáveis</title>
</head>
<body>
<div>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X e $x";
        echo "<br/>A variável criada recebeu o valor $abc";    
    ?>
</div>    
</body>
</html>