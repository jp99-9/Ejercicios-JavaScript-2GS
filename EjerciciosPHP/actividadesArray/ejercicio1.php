<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Crear un array

    $color = array('white', 'green', 'red', 'blue', 'black');
    // Display a sentence using elements from the color array
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . "<br>";

    /* 5- $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.*/

    $color = array(4 => 'white', 6 => 'green', 11 => 'red');

    echo "<br> Ejercicio 5 <br>" . reset($color);
    ?>
</body>

</html>