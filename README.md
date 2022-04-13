# Curso-PHP

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php 
    echo "---- aula 3 ----<br/>";
    $nome = "Rafael";
    $idade = 36;
    echo "<br/>$nome tem $idade anos!</br>";

    echo "</br>---- aula 4 ----<br/>";
    $n1 = 3;
    $n2 = 2;
    $m = ($n1 + $n2) /2;
    echo "</br>A soma de $n1 e $n2 é igual a ". ($n1 + $n2);
    echo "</br>A subtração de $n1 e $n2 é igual a ". ($n1 - $n2);
    echo "</br>A miltiplicação de $n1 e $n2 é igual a ". ($n1 * $n2);
    echo "</br>A divisão de $n1 e $n2 é igual a ". ($n1 / $n2);
    echo "</br>A média de $n1 e $n2 é igual a $m</br>"; 

    
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "</br>---- aula 5 ----";
    echo "<h2> Valores recebidos $v1 e $v2";
    echo "<br/> O valor absoluto de $v2 é " . abs($v2);
    echo "</br> A potenciação de $v1<sup>$v2</sup> é " .pow($v1, $v2);
    echo "<br/> A raíz de $v2 é ".sqrt($v2);
    echo "<br/> O valor de $v2 arredondado é " . round($v2);
    echo "<br/> O valor de $v2 arredondado para cima é " . ceil($v2);
    echo "<br/> O valor de $v2 arredondado para baixo é " . floor($v2);
    echo "</br> A parte inteira de $v2 é ".intval($v2);
    echo "</br> O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");
    echo "</h2>";

    echo "</br>---- aula 6 ----</br>";
    $preco = $_GET["p"];
    echo "</br>O valor do porduto é de R$ $preco";
    $preco += $preco * 10 / 100;
    echo "<br/> O valor do produto com 10% de acréscimo é de R$ ". number_format($preco,2,",",".");
    $preco -= $preco * 10 / 100;
    echo "<br/> O valor do produto com 10% de desconto é de R$ ". number_format($preco,2,",",".");

    $ano = $_GET["aa"];
    echo "<br/><br/> O ano atual é de $ano e o ano anterior é ". --$ano;
    echo "</br>";

    $a = 3;
    $b = $a;
    $b += 5;
    echo "<br/> A varável A recebe $a";
    echo "<br/>A varável B recebe $b<br/>";
    
    $a = 3;
    $b = &$a; //variável de referência
    $b += 5;
    echo "<br/> A varável A recebe $a";
    echo "<br/>A varável B recebe $b<br/>";

    $x = "abc";
    $$x = "def";
    echo "<br/>A variável x contém $x";
    echo "</br> A variável abc recebeu o valor ". $$x; #variáveis de variáveis ou variável de variante
    echo "</br>";
    
    echo "</br>---- aula 7 ----</br>";
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo= $_GET["op"];
    echo "<br/>Os valores passados foram $n1 e $n2";
    echo "<br> PS:digite s para somar e m para multiplicar";
    $r = ($tipo == "s") ? ($n1+$n2) : ($n1*$n2);
    echo "</br> O resultado é $r.</br>";
    
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "Sim" : "Não"; //igualdade
    echo "<br/> As variáveis são iguais? $r";

    $c = 3;
    $d = "3";
    $r = ($c === $d) ? "Sim" : "Não"; //idêntico
    echo "<br/> As variáveis são idênticas? $r</br>";

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $med = ($nota1 + $nota2) / 2;
    $status = ($med < 6) ? "Reprovado" : "Aprovado";
    echo "<br/> O aluno com as notas $nota1 e $nota2 tem a média $med e está $status";

    $nota3 = $_GET["n3"];
    $nota4 = $_GET["n4"];
    $med = ($nota3 + $nota4) / 2;
    $status = ($med < 6) ? "Reprovado" : "Aprovado";
    echo "<br/> O aluno com as notas $nota3 e $nota4 tem a média $med e está ". (($med < 6) ? "Reprovado" : "Aprovado</br>");

    $ano = $_GET['an'];
    $idade = date("Y") - $ano;
    echo "</br></br> Quem nasceu em $ano tem a idade de $idade";
    $tipo = ($idade >=18 && $idade <65)?"é OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
    echo "<br/> E quem nasceu em $ano $tipo a votar</br>";

        echo "</br>---- aula 8 ----<br/>";  
    echo "<br/>";
    ?>
    <form method="get" action="01valor.php">
        valor: <input type="number" name="v"/>
        <input type="submit" value="Calcular raíz"/>
    </form>
    
    //Arquivo action 01
        <?php 

        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raíz quadrada de $valor é ". number_format($rq,2);
    ?>
    <a href="curso.php">Voltar</a>
    <br/>
    <br/>

    <form method="get" action="02idade.php">
        Nome: <input type="text" name="nome"/></br>
        Ano de nascimento: <input type="number" name="ano"/></br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem"/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">Feminino</label></br>
        </fieldset></br>
        <input type="submit" value="Enviar"/>
    </form>
    //Arquivo action 02
        <?php
    
        $nome = isset($_GET["nome"])? $_GET["nome"]:"Não Informado";
        $ano = isset($_GET["ano"])? $_GET["ano"]:"Não Informado";
        $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"Não Informado";
        $idade = date("Y") - $ano;

        echo "$nome tem $idade anos é $sexo";    
    ?>
    
    <br/>
    <br/>

    <form method="get" action="03cores.php">
        <label for="itxt">Texto: </label>
        <input type="text" name="t" id="itxt"/></br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select> </br>
        <label for="icor">Cor: </label>
        <input type="color" name="cor" id="icor"/> <br/>
        <input type="submit" value="Gerar"/>  
    </form>    
    ?>
    //arquivo action 03
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";    
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <?php
        echo "<span class=texto>$txt</span";
    ?>
    
</body>
</html>
