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
        interface Controlador {
            public function ligar();
            public function desligar();
            public function abrirMenu();
            public function fecharMenu();
            public function maisVolume();
            public function menosVolume();
            public function ligarMudo();
            public function desligarMudo();
            public function play();
            public function pause();
        }
       
    ?>

</body>
</html>