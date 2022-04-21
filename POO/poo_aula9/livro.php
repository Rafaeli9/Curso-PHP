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
    require_once 'pessoa.php';
    require_once 'publicacao.php';
    class Livro implements Publicacao{

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes(){
            echo "<hr>Livro ".$this->titulo." escrito por ".$this->autor;
            echo "<br> Páginas: ".$this->totPaginas." atual ".$this->autor;
            echo"<br> sendo lido por ".$this->leitor->getNome();
        }

	function __construct($titulo, $autor, $totPaginas, $leitor) {
	    $this->titulo = $titulo;
	    $this->autor = $autor;
	    $this->totPaginas = $totPaginas;
	    $this->pagAtual = 0;
	    $this->aberto = false;
	    $this->leitor = $leitor;
	}

	function getTitulo() {
		return $this->titulo;
	}

	function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	function getAutor() {
		return $this->autor;
	}

	function setAutor($autor){
		$this->autor = $autor;
	}
	function getTotPaginas() {
		return $this->totPaginas;
	}

	function setTotPaginas($totPaginas) {
		$this->totPaginas = $totPaginas;
	}

	function getPagAtual() {
		return $this->pagAtual;
	}

	function setPagAtual($pagAtual) {
		$this->pagAtual = $pagAtual;
	}

	function getAberto() {
		return $this->aberto;
	}

	function setAberto($aberto) {
		$this->aberto = $aberto;
	}
	function getLeitor() {
		return $this->leitor;
	}
	function setLeitor($leitor){
		$this->leitor = $leitor;
	}

    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p>$this->totPaginas) {
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->pagAtual --;
    }

}
       
    ?>
 
</body>
</html>