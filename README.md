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
    <form method="get" action="votar.php">
        Ano de Nascimento:
        <input type="number" placeholder="4 digitos" name="ano"/>
        <input type="submit" value="Verificar"/>
    </form>
    
    <?php 
    echo "</br>---- aula 9 ----<br/>";  
    
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos.";

    if($i >=18) {
        $v = "<br/>Já pode votar<br/>";
        $d = "Já pode dirigir<br/>";
    }
    else {
        $v = "<br/>Não pode votar<br/>";
        $d = "não pode dirigir<br/>";
    }
    echo "<br/>Com essa idade você $v e também $d.";

    if($i < 16){
        $tipoVoto = "Não vota!";
    }
    elseif (($i >= 16 && $i < 18) || ($i >65)){
        $tipoVoto = "Voto Opcional!";
    }
    else {
        $tipoVoto = "Voto OBRIGATÓRIO!";
    }
    echo "</br> Você esta com $i anos e $tipoVoto."
    ?>
    <a href="curso.php">Voltar</a>
    
     <form method="get" action="media.php">
        Nota 1:
        <input type="number" name="nota1"/><br/>
        Nota 2:
        <input type="number" name="nota2"/><br/>
        <input type="submit" value="Calcular Média"/>
    </form>
    
    <?php
        $nota1 = isset($_GET["nota1"])? $_GET["nota1"]: "Infome uma nota";
        $nota2 = isset($_GET["nota2"])? $_GET["nota2"]: "Infome uma nota";
        $media = ($nota1 + $nota2) / 2;

        if($media == 0 || $media <5){
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta REPROVADO!";
        }
        elseif($media <7){
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta RECUPERAÇÃO!";
        }
        else{
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta APROVADO!";
        }
    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
    
    //aula 10
    <form method="get" action="switch.php">
        Número: <input type="number" name="num"/></br>
        <fieldset><legend>Operação</legend>
        <input type="radio" name="oper" id="dobro" value="1" checked/>
        <label for="dobro">Dobro</label>
        <input type="radio" name="oper" id="cubo" value="2"/>
        <label for="cubo">Cubo</label>
        <input type="radio" name="oper" id="raiz" value=""/>
        <label for="raiz">Raíz Quadrada</label>
        </fieldset>
        <input type="submit" value="Calcular"/>
    </form>
        <?php
        $n = ($_GET["num"])?$_GET["num"]:0;
        $o = ($_GET["oper"])?$_GET["oper"]:0;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n,2);  // $n ^ 0.5 ou (1/2)
        }
        echo "<br/> O resultado da sua escolha foi $r";

    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
    ----------------------------------------------------------------------------
    <form method="get" action="semana.php">
        Dia da Semana: <input type="number" name="ds" required=""/></br>
        <input type="submit" value="Anallisar"/>
    </form>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:    
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Dia de descanso pequno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana INVÁLIDO!";
        }
    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
    ----------------------------------------------------------
    <form method="get" action="estados.php">
        <label> Estados: </label>
        <select name="lista">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PÁ">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <input type="submit" value="Verificar"/>
    </form>
        <?php
        $e = isset($_GET['lista'])? $_GET['lista']:0;
        switch ($e){
            case "SP":
            case "RJ":
            case "MG":
            case "ES":
                $regiao = "REGIÃO SUDESTE";
            break;
            case "GO":
            case "MT":
            case "MS":
            case "DF":
                $regiao = "Região Centro-Oeste";
            break;
            case "PR":
            case "SC":
            case "RS":
                $regiao = "Região Sul";
            break;
            break;
            case "AC":
            case "AM":
            case "AP":
            case "PA":
            case "RR":
            case "RO":
            case "TO":
                $regiao = "Região Norte";
            break;
            default:
                $regiao = "Regiao Nordeste";
        }
        echo "Você mora na $regiao";
    
    ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
    
    <h3>Aula 11</h3>
    <form method="get" action="while.php">
        <label>Início</label>
        <input type="number" name="inicio"/>
        <br/>
        <label>Final</label>
        <input type="number" name="final"/>
        <br/>
        <label>Incremento</label>
        <select name="incremento">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> 
        <br/>
        <input type="submit" value="Calcular"/>
    </form>
    <?php
        $i = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $f = isset($_GET["final"])?$_GET["final"]:0;
        $incr = isset($_GET["incremento"])?$_GET["incremento"]:1;

        if($i >= $f){
            while ($i >= $f){
                echo "$i ";
                $i -= $incr;
            }
        }
        elseif($i <= $f){
                while($i <= $f){
                    echo "$i ";
                    $i += $incr;
            }
        }   
    ?>
    
    <h3>Aula 12</h3>
    <form method="get" action="fatorial.php">
        Valor: <input type="number" name="val"/>
        <input type="submit" value="Fatoriar"/>
    </form>
    <br/>
    <br/>
        <?php
        $v = isset($_GET['val'])? $_GET['val']:1;
        echo "<h1> Calculando o fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat  = $fat * $c;
            $c--;
        } while($c >= 1);
        echo "<h2> $v! = $fat";
    ?>    
    --------------------------------------------------
    <form method="get" action="tabuada.php">
       <label>Número:</label>
       <select name="num">
           <?php
            $c = 1;
            while($c<=10){
                echo "<option>$c</option>";
                $c++;
            }           
           ?>
       </select>
       <input type="submit" value="Calcular"/>
    </form>
        <?php
        $n = isset($_GET["num"])? $_GET["num"]:1;
        $c = 1;
        do {
            $tabu = $n * $c;
            $c++;
            echo "$n x $c = $tabu"."</br>";
        }while($c <= 10);
        
    ?>
    
    <h2>Aula 13</h2>
    
    <form method="get" action="primo.php">
      <label id="num">Numero:</label>
      <input type="number" name="num" id="num"  value="1"/>
      <input class="botao" type="submit" value="num" />
    </form>
    <?php   
            $valor = isset($_GET["num"])?$_GET["num"]:0;
            $c = 0;
            echo "Analisando o número $valor<br/>";
           for($i=1; $i<=$valor; $i++){
           if($valor % $i ==0){            
            $c++;
            $qtd .="," . $i; 
           }
        }
        if($c == 2 && $c>0){
            echo "$valor é PRIMO!";
        }
        elseif($c>2){
            echo "$valor NÃO é PRIMO!";
        }
        echo "<br/> O total de múltiplos de $ valor é $c";
        echo "<br/>Valores multiplos de $valor são $qtd ";
           
           
    ?>
    
    
    
    
    
    
</body>
</html>
