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
        $n = ($_GET["num"])?$_GET["num"]:0;
        $o = ($_GET["oper"])?$_GET["oper"]:0;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n,2);  // $n ^ 0.5 ou (1/2)
        }
        echo "<br/> O resultado da sua escolha foi $r";

    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
</body>
</html>