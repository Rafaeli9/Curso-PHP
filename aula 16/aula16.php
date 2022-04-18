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
      $prod = "leite";
      $preco = 4.5;
      printf("O %s está custando R$ %.2f", $prod, $preco);

      echo "----------------------<br/>";
      echo "Exemplo 2</br>";
      $v[0] = 4;
      $v[1] = 8;
      $v[2] = 3;
      print_r($v);
      echo "<br />";
      var_dump($v);
      echo "<br />";
      var_export($v);

      echo"</br>";

      $v2 = array (3, 7, 6, 2, 1, 9);
      print_r($v2);  
      
      echo"-----------------------</br>";
      echo "Exemplo 3</br>";
      $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
      $r = wordwrap($t, 20,"<br />\n", true);
      echo $r;    
      
      echo "----------------------<br/>";
      echo "Exemplo 4</br>";
      $t = "Curso em Video";
      $r = strlen($t);
      echo $r;  
      
      echo "----------------------<br/>";
      echo "Exemplo 5</br>";
      $nome = "   Jose da Silva   ";
      echo(strlen($nome));
      $novo = trim($nome);
      echo("<br/>");
      echo(strlen($novo));  
      
      echo "----------------------<br/>";
      echo "Exemplo 6</br>";
      $t = "Curso em Video";
      $r = str_word_count($t, 0);
      /* 0> conta as palavras
        1> cria com array com as palavras
        2> cria um array mantendo o índice
      */
      echo $r;

      echo "----------------------<br/>";
      echo "Exemplo 7</br>";
      $site = "Curso em Video";
      $vetor = explode(" ", $site); // lembra o split 
      print_r($vetor);

      echo "----------------------<br/>";
      echo "Exemplo 8</br>";
      $nome = "Curso em Video";
      $vetor = str_split($nome);
      print_r($vetor);

      echo "----------------------<br/>";
      echo "Exemplo 9</br>";
      $vetor[0] = "Curso";
      $vetor[1] = "em";
      $vetor[2] = "Video";
      $texto = implode("#", $vetor); // join()
      print($texto);

      echo "----------------------<br/>";
      echo "Exemplo 10</br>";
      $letra = chr(67);
      echo "A letra de código 67 é $letra";

      $outra = "C";
      $cod = ord($outra);
      echo "<br/> O código da letra 'C' é $cod";

  ?>
</body>
</html>