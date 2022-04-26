<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'mamifero.php';
            require_once 'reptil.php';
            require_once 'peixe.php';
            require_once 'ave.php';
            require_once 'canguru.php';
            require_once 'cachorro.php';
            require_once 'cobra.php';
            require_once 'tartaruga.php';
            require_once 'goldfish.php';
            require_once 'arara.php';

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();

            $m->locomover();
            $c->locomover();
            $k->locomover();
            $t->locomover();

            $m->emitirSom();
            $k->emitirSom();
            $c->emitirSom();


        ?>
    </pre>
</body>
</html>