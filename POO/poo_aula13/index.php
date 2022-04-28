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
            require_once 'animal.php';
            require_once 'mamifero.php';
            require_once 'lobo.php';
            require_once 'cachorro.php';


            $m = new Lobo();
            $c = new Cachorro();
            
            $m->locomover();

            $m->emitirSom();
            $c->emitirSom();

            $c->reagirFrase("Olá");
            $c->reagirFrase("Vai apanhar");

            $c->reagirHora(11,45);
            $c->reagirHora(21,00);

            $c->reagirDono(true);
            $c->reagirDono(false);

            $c->reagirIdadePeso(1, 12.5);
            $c->reagirIdadePeso(17, 4.5);

            print_r($c);
            print_r($m);



        ?>
    </pre>
</body>
</html>