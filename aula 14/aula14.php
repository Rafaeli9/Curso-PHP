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
    function subtrai ($a, $b){
      return $a - $b;
   }

   $x = 4;
   $y = 5;
   $r = subtrai($x,$y);
   echo "</br>A subtração entre $x e $y é $r";

   function soma() {
       $p = func_get_args();
       $t = func_num_args();
       $s = 0;
       for($i=0; $i<$t; $i++){
           $s += $p[$i];
       }
       return $s;
   }
   $r = soma(3,5,2);
   echo"A soma dos valores é $r";
  ?>
</body>
</html>