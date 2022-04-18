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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:    
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Dia de descanso pequno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana INVÁLIDO!";
        }
    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
</body>
</html>