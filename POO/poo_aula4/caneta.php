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
    class caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        public function __construct($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }



    }
    ?>
</body>
</html>
