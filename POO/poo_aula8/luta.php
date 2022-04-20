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
       require_once 'lutador.php';
       class Luta {
       //Atributos
            private $desafiado;
            private $desafiante;
            private $rounds;
            private $aprovada;

        //Metodos Públicos
            public function marcarLuta($l1, $l2){
                if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                    $this->aprovada = true;
                    $this->desafiado = $l1;
                    $this->desafiante = $l2;
                }else{
                    $this->aprovada = false;
                    $this->desafiado = null;
                    $this->desafiante = null;
                }
            }  
            
            public function lutar(){
                if($this->aprovada){
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    $vencedor = rand(0,2);
                    switch ($vencedor) {
                        case 0: //Empate
                            echo"<p>Empate</p>";
                            $this->desafiado->empatarLuta();
                            $this->desafiante->empatarLuta();                            
                            break;
                        case 1: //Desafiado vence
                            echo"<p>". $this->desafiado->getNome()." venceu";
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                        case 2: //Desafiante vence
                            echo"<p>". $this->desafiante->getNome()." venceu";
                            $this->desafiante->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                    }
                }else {
                    echo "<p>A luta não pode Acontecer!</p>";
                }
            }        
            function getDesafiado() {
                return $this->desafiado;
            }

            function setDesafiado($desafiado) {
                $this->desafiado = $desafiado;
            }
            function getDesafiante() {
                return $this->desafiante;
            }
            function setDesafiante($desafiante){
                $this->desafiante = $desafiante;
            }
            function getRounds() {
                return $this->rounds;
            }
            function setRounds($rounds) {
                $this->rounds = $rounds;
            }
            function getAprovada() {
                return $this->aprovada;
            }
            function setAprovada($aprovada){
                $this->aprovada = $aprovada;
            }
}       
    ?>
  
</body>
</html>