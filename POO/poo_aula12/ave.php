  <?php
    require_once 'animal.php';
    class Ave extends Animal{
        private $corPena;
        public function alimentar(){
            echo "<p>Comendo frutas</p>";
        }
        public function emitirSom(){
        echo"<p>Som de Ave<p/>";
        }
        public function locomover()
        {
            echo "<p>Voando</p>";
        }
        public function fazerNinho(){
            echo "<p>Construindo um ninho</p>";
        }
        public function getCorPena()
        {
                return $this->corPena;
        }
        public function setCorPena($corPena)
        {
                $this->corPena = $corPena;

                return $this;
        }
    }
  ?>
