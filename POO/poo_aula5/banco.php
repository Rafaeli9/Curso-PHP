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
    class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Métodos
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC"){
            $this->setSaldo(50);
        }elseif ($tipo == "CP"){
            $this->saldo = 150;
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo"<p>Conta possui dinheiro, não posso encerra-lá</p>";
        }elseif($this->getsaldo() < 0){
            echo"<p>Conta possui débito, impossível encerrara!</p>";
        }else{
            $this->setStatus(false);
            echo"<p>Conta de ".$this->getDono() . "encerrada com sucesso</p>";
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            //$this->saldo = $this->saldo + $v;
            echo"<p>Depósito de R$ $v na conta de $this->getDono()</p>";
        }else {
            echo"<p>Conta encerrada! Não consigo depositar.</p>";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                //$this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Saque de R$ $v Autorizado na conta do(a) $this->getDono()</p>";
            }else {
                echo "<p>Saldo  insuficiente pasra saque</p>";
            }
        }else {
            echo"<p>Não posso sacar de uma conta encerrada</p>";
        }
    }
    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        }elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo"<p>Mensalidade de R$ $v debitada na conta de $this->getDono()</p>";
        }else{
            echo"<p>Problemas com a conta. Não posso cobrar</p>";
        }
    }
    //Métodos Especiais
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>Conta criada com sucesso!</br></p>";
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }



    }
    ?>
</body>
</html>