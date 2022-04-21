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
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
    
    public function fazerAniver(){
        $this->idade ++;
    }

	function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
 
	function getNome() {
		return $this->nome;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function getIdade() {
		return $this->idade;
	}

	function setIdade($idade) {
		$this->idade = $idade;
	}

	function getSexo() {
		return $this->sexo;
	}

	function setSexo($sexo){
		$this->sexo = $sexo;
	}
}  
    ?>
 
</body>
</html>