<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO POO</title>
</head>
<body>
  <?php
    require_once 'pessoa.php';
    class Gafanhoto extends Pessoa {    
        private $login;
        private $totAssistido;

        public function __construct ($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function assistirMaisUm(){
            $this->totAssistido ++;
        }
        public function getLogin()
        {
                return $this->login;
        }
        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }
        public function getTotAssistido()
        {
                return $this->totAssistido;
        }
        public function setTotAssistido($totAssistido)
        {
                $this->totAssistido = $totAssistido;

                return $this;
        }
    }
  ?>
</body>
</html>