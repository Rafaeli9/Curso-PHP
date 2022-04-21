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
    interface Publicacao {
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avancarPag();
        public function voltarPag();
    }
       
    ?>
 
</body>
</html>