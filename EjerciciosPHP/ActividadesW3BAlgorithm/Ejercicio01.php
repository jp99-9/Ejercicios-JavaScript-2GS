<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
<h1>PHP</h1>

<?php
   

   function calcular($x,$y){
    if($x==$y){
      return ($x +$y)*3;
    }  else{
      return $x +$y;
    }
  }

  echo calcular(10,3) . "\n";
  echo calcular(2,2);

    ?>
</body>
</html>