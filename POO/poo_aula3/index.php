<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO DE POO</title>
</head>
<body>
    <?php
        require_once 'caneta.php';
        $c1 = new caneta;
        $c1->modelo = "Bic cristal";
        $c1->cor = "azul";
        $c1->ponta = 99;
        //$c1-> tampada = false;
        $c1->tampar();
        print_r($c1);

        echo "</br>";

        $c2 = new caneta;
        $c2->cor = "verde";
        $c2->carga= 50;
        $c2->tampar();
        print_r($c2);

    ?>
</body>
</html>