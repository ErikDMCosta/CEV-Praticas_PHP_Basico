<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>AULA 10 - 03 Exercício</title>
</head>
<body>
<div>
    <?php
      $estado_selecionado = isset($_GET["estados"]) ? $_GET["estados"] : 0;
      switch ($estado_selecionado) {
      // Começo da Região Norte
        case "AC":
        case "AP":
        case "AM":
        case "PA":
        case "RO":
        case "RR": 
        case "TO":
          echo "Você mora em um estado da <span class='foco'>Região Norte</span>";
          break;
        // Começo da Região Nordeste
        case "AL":
        case "BA":
        case "CE";
        case "MA";
        case "PB";
        case "PE";
        case "PI";
        case "RN";
        case "SE";
          echo "Você mora em um estado da <span class='foco'>Região Nordeste</span>";
          break;
        // Começo da Região Centro-Oeste
        case "GO":
        case "MT":
        case "MS";
          echo "Você mora em um estado da <span class='foco'>Região Centro-Oeste</span>";
          break;
        // Começo da Região Sudeste
        case "ES":
        case "MG":
        case "RJ";
        case "SP";
          echo "Você mora em um estado da <span class='foco'>Região Sudeste</span>";
          break;
        // Começo da Região Sul
        case "PR":
        case "RS":
        case "SC";
          echo "Você mora em um estado da <span class='foco'>Região Sul</span>";
          break;
      }
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 