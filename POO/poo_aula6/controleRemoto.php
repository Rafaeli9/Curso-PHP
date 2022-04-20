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
    require_once 'controlador.php';
        class ControleRemoto implements Controlador{
        //Atributos
            private $volume;
            private $ligado;
            private $tocando;
        //Métodos Especiais
            function __construct(){
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }
            private function getVolume(){
                return $this->volume;
            }
            private function getLigado(){
                return $this->ligado;
            }
            private function getTocando(){
                return $this->tocando;
            }
            private function setVolume($volume){
                $this->volume = $volume;
            }
            private function setLigado($ligado){
                $this->ligado = $ligado;
            }
            private function setTocando($tocando){
                $this->tocando = $tocando;
            }

            public function ligar(){
                $this->setLigado(true);
            }
            public function desligar(){
                $this->setLigado(false);
            }
            public function abrirMenu(){
                echo"<br>Esta ligado?: " . ($this->getLigado()?"SIM":"NÃO");
                echo"<br>Esta tocando?: " . ($this->getTocando()?"SIM":"NÃO");
                echo"<br>Volume: " . $this->getVolume();
                for($i=0; $i <= $this->getVolume(); $i+=10){
                    echo"|";
                }
                echo"<br>";
            }
            public function fecharMenu(){
                echo"<br>Fechando Menu...";
            }
            public function maisVolume(){
                if($this->getLigado()){
                    $this->setVolume($this->getVolume() + 5);
                }else{
                    echo"<p>ERRO! Não posso aumentar o volume!</p>";
                }
            }
            public function menosVolume(){
                if($this->getLigado()){
                    $this->setLigado($this->getVolume() - 5);
                }else{
                    echo"<p>ERRO! Não posso aumentar o volume!</p>";
                }
            }
            public function ligarMudo(){
                if($this->getLigado() && $this->getVolume() > 0){
                    $this->setVolume(0);
                }
            }
            public function desligarMudo(){
                if($this->getLigado() && $this->getVolume() == 0){
                    $this->setVolume(50);
                }
            }
            public function play(){
                if($this->getLigado() && !($this->getTocando())){
                    $this->setTocando(true);
                }
            }
            public function pause(){
                if($this->getLigado() && $this->getTocando()){
                    $this->setTocando(false);
                }
            }
            
        }
       
    ?>
  
</body>
</html>