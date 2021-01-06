<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 12 - 01 Exercício</title>
</head>
<body>
<div>
    <?php
        $c = 1;
        echo "Iniciando en um pulando de um em um até dez: <br/>";
        do {
          echo "$c ";
          $c++;
        } while ($c<=10);
        //==============================//
        $c = 0;
        echo "<br><br>Iniciando em zero pulando de dois em dois até vinte: <br/>";
        do {
          echo "$c ";
          //$c++;
          $c+=2;
        } while ($c<=20);
        //==============================//
        $c = 10;
        echo "<br><br/>Contagem regressivo de menos um em um<br/>";
        do {
          echo "$c ";
          $c--;
        } while ($c>=1);
        $c = 10;
        echo "<br><br/>Contagem regressivo de menos dois em dois<br/>";
        do {
          echo "$c ";
          $c-=2;
        } while ($c>=1);
    ?>
</div>
</body>
</html>
 
