<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 18 - 03 Exercício</title>
</head>
<body>
<div>
        <?php
// Código abaixo diz que começa em 5 termina em 20 e pula de 2 em 2
            $c = range(5, 20, 2);
//Código abaixo diz que para cada $C tratada como $valor mostre $valor na tela
            foreach ($c as $v) {
                echo "$v ";
            }   
        ?>
<!-- Tags abaixo e significados:
(<pre>) é a tag utilizada para representar texto pré-formatado. 
(border) é uma propriedade para ajustar os valores de propriedades individuais da borda em um único elemento na folha do estilo.
(<tr>) define uma linha de células em uma tabela. 
-->
	<pre>
		<table border="1"><tr>
    <?php
        $c = range(5, 20, 2);
        foreach($c as $v) {
	        echo "<td>$v ";
        } 
    ?>
		</table>
	</pre>
</div>
</body>
</html>
 
