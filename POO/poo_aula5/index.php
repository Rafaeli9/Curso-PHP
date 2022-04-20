<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO DE POO</title>
</head>
<body>
<body>
    <pre>
    <?php
       require_once 'caneta.php';
       $c1 = new caneta("Bic", "azul", 0.5);
       $c2 = new caneta("Mont blanc", "verde", 1.5);

       print_r($c1);
       print_r($c2);

       require_once 'exercicio.php';
       $celular1 = new celular("Iphone 13", "branco", 128);
       $celular2 = new celular("S22 note", "bronze", 256);

       print_r($celular1);
       print_r($celular2);

    ?>
    </pre>    
</body>
</html>