<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>AULA 13 - 02 - A - Exercício</title>
</head>
<body>
    <div>
        <form method="get" action="aula13-parte2-b.php">
            <select name="num">
                <?php
                    for ($count = 1; $count <= 10; $count++) {
                        echo "<option>$count</option>";
                    }    
                ?>
            </select>
            <input type="submit" value="Tabuada" class="botao"/>
        </form>
    </div>
</body>
</html>
 
