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
        $n = isset($_GET["num"])? $_GET["num"]:1;
        $c = 1;
        do {
            $tabu = $n * $c;
            $c++;
            echo "$n x $c = $tabu"."</br>";
        }while($c <= 10);    
    ?>
</body>
</html>