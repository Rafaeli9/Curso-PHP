<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO PHP</title>
</head>
<body>
  <?php
    echo "Exemplo 1</br>";
    $nome = "Tony Stark";
    $nome2 = strtolower($nome);
    echo "Seu nome é $nome2";

    echo "----------------------<br/>";

    echo "Exemplo 2</br>";
    $nome = "Tony Stark";
    $nome2 = strtoupper($nome);
    echo "Seu nome é $nome2";

    echo "----------------------<br/>";

    echo "Exemplo 3</br>";
    $nome = "tony stark";
    $nome2 = ucfirst($nome);
    $nome3 = ucfirst(strtolower($nome));
    echo "Seu nome é $nome2";
    echo "Seu nome é $nome3";

    echo "----------------------<br/>";

    echo "Exemplo 4</br>";
    $nome = "tony stark";
    $nome2 = ucwords($nome);
    echo "Seu nome é $nome2";

    echo "----------------------<br/>";

    echo "Exemplo 5</br>";
    $nome = "tony stark";
    $nome2 = strrev($nome);
    echo "Seu nome é $nome2";

    echo "----------------------<br/>";

    echo "Exemplo 6</br>";
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP");
    echo "$frase </br> A string foi encontrada na posição $pos";

    echo "----------------------<br/>";

    echo "Exemplo 7</br>";
    $frase = "Estou aprendendo PHP";
    $pos = stripos($frase, "php"); //o i "ignora" se é Mais ou Minus
    echo "$frase </br> A string foi encontrada na posição $pos";

    echo "----------------------<br/>";

    echo "Exemplo 8</br>";
    $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $pos = substr_count($frase, "PHP");
    echo "$frase </br> O PHP encontrado $count vezes";

    echo "----------------------<br/>";

    echo "Exemplo 9</br>";
    $site = "Curso em Vídeo";
    $sub = substr($site, 0,5);
    echo "$sub ";

    echo "----------------------<br/>";

    echo "Exemplo 10</br>";
    $nome = "Guanabara";
    $novo = str_pad($nome, 30, "", str_pad_right);
    $novo2 = str_pad($nome, 30, "", str_pad_center);
    $novo3 = str_pad($nome, 30, "", str_pad_left);
    echo "Meu professor $novo é lindo";
    echo "Meu professor $novo2 é lindo";
    echo "Meu professor $novo3 é lindo";

    echo "----------------------<br/>";

    echo "Exemplo 11</br>";
    $txt = str_repeat("PHP", 5);
    echo "O texto gerado foi $txt";
    echo (str_repeat("-", 20));

    echo "----------------------<br/>";

    echo "Exemplo 12</br>";
    $frase = "Gosto de estudar Matemática";
    $novafrase = str_replace("Matemática", "PHP", $frase); //Substitui matemática para php
    echo "$novafrase";

    $frase2 = "Gosto de estudar matemática e Matemática é muito legal";
    $novafrase2 = str_ireplace("Matemática", "PHP", $frase2); //Substitui matemática para php
    echo "$novafrase2";

    echo "----------------------<br/>";




    
  
  ?>
</body>
</html>