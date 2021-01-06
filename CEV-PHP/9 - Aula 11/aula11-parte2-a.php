<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 11 - 02 - A Exercício</title>
</head>
<body>
      <div>
          <form method="get" action="aula11-parte2-b.php">
              <?php
                  $count = 1;
                  while ($count <= 5) {
                      echo "<label for='num$count'>Valor $count: </label> 
                      <input type='number' name='value$count' id='num$count' max='100' min='0' value='0'/>
                      <br/>";
                      $count++;
                  }
               ?>  
                <input type="submit" value="Enviar" class="botao"/>
          </form>
      </div>
</body>
</html>
 