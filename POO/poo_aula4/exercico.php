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
    class celular {
        private $modelo;
        private $cor;
        private $capacidade;
        private $ligar;

        public function __construct($m, $c, $cap){
            $this->modelo = $m;
            $this->cor = $c;
            $this->capacidade = $cap;
            $this->ligar();
        }

        public function ligar(){
            $this->ligar = true;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getCapacidade(){
            return $this->capacidade;
        }
    }
    ?>
</body>
</html>
