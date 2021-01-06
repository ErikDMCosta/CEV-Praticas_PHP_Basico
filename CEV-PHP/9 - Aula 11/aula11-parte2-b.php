<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>AULA 11 - 02 - B Exercício</title>
</head>
<body>
    <div>
        <?php
            $index = 1;
            while ($index <= 5) {
                $numeral = "numeric".$index;
                $url = "value".$index;
                $$numeral = isset($_GET[$url])?$_GET[$url]:0;
                $index++;
            }
            //echo "$numeric1 $numeric2 $numeric3 $numeric4 $numeric5 $numeric6";
            $index = 1;
            while ($index <= 5) {
                $numeral = "numeric".$index;
                echo "Valor $index : ".$$numeral."<br/>";
                $index++;
            }
        ?>
        <br/>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
 