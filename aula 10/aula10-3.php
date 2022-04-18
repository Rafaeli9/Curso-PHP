<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO PHP</title>
</head>
<body>
<?php
        $e = isset($_GET['lista'])? $_GET['lista']:0;
        switch ($e){
            case "SP":
            case "RJ":
            case "MG":
            case "ES":
                $regiao = "REGIÃO SUDESTE";
            break;
            case "GO":
            case "MT":
            case "MS":
            case "DF":
                $regiao = "Região Centro-Oeste";
            break;
            case "PR":
            case "SC":
            case "RS":
                $regiao = "Região Sul";
            break;
            break;
            case "AC":
            case "AM":
            case "AP":
            case "PA":
            case "RR":
            case "RO":
            case "TO":
                $regiao = "Região Norte";
            break;
            default:
                $regiao = "Regiao Nordeste";
        }
        echo "Você mora na $regiao";
    
    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
</body>
</html>