<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP</h1>

  <!--Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.*/

<?php
function calcular($n)
{
  if ($n > 51) {
    return ($n - 51) * 3;
  } elseif ($n < 51) {
    return (51 - $n);
  } elseif ($n == 51) {
    return 0;
  }
}

echo calcular(53) . "\n";
echo "<br>";
echo calcular(30);

?>
</body>

</html>