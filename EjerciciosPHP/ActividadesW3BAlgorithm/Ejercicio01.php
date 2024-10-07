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


  function calcular($x, $y)
  {
    if ($x == $y) {
      return ($x + $y) * 3;
    } else {
      return $x + $y;
    }
  }

  echo calcular(10, 3) . "\n";
  echo calcular(2, 2);


  /*2-Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.*/

  function calculo($n)
  {
    if ($n > 51) {
      return ($n - 51) * 3;
    } elseif ($n < 51) {
      return (51 - $n);
    } elseif ($n == 51) {
      return 0;
    }
  }

  echo calculo(53) . "\n";
  echo "<br>";
  echo calculo(30);


  /*3-Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
  Sample Input:*/

  function comprobar($x, $y)
  {

    if ($x == 30 || $y == 30) {
      return true;
    } elseif (($x + $y) == 30) {
      return true;
    }
  }
  echo "Ejercicio 3\n";
  echo comprobar(30, 0);
  echo "";
  echo comprobar(3, 8);
  echo comprobar(27, 3);

  /*5. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.*/
  echo "\nEjercicio 5";

  function test($frase){
    if(strlen($frase)>= 2 && substr($frase, 0,2) == "if"){
      return $frase;
    }else{
      return "if" .$frase;
    }
  }
  echo test("else") . "\n";

  ?>
</body>

</html>