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
    require_once 'acoesVideo.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo){
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views =0;
            $this->curtidas =0;
            $this->reproduzindo =false;
        }
        
        public function like() {

        }
        public function pause(){

        }
        public function play() {

        }
        public function getTitulo()
        {
                return $this->titulo;
        }
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }
        public function getAvaliacao()
        {
                return $this->avaliacao;
        }
        public function setAvaliacao($avaliacao)
        {
                $media = ($this->avaliacao + $avaliacao) / 2;
                $this->avaliacao = $media;

                return $this;
        }
        public function getViews()
        {
                return $this->views;
        }
        public function setViews($views)
        {
                $this->views = $views;

                return $this;
        }
        public function getCurtidas()
        {
                return $this->curtidas;
        }
        public function setCurtidas($curtidas)
        {
                $this->curtidas = $curtidas;

                return $this;
        }
        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo)
        {
                $this->reproduzindo = $reproduzindo;

                return $this;
        }
    }
  ?>
</body>
</html>