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
    class Caneta{
        public var $modelo;
        public var $cor;
        private var $ponta;
        protected var $carga;
        protected var $tampada;

        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>ERRO! não posso rabiscar!</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }

        }

        public function tampar(){
            $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
        }

    }
    
    ?>
</body>
</html>
