<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    <!--Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
Sample Input: -->
    <script>
        <?php

        function comprobar($x, $y)
        {

            if ($x == 30 || $y == 30) {
                return true;
            } elseif (($x + $y) == 30) {
                return true;
            }
        }

        echo comprobar(30, 0);
        echo "";
        echo comprobar(3, 8);
        echo comprobar(27, 3);

        ?>
    </script>
</body>

</html>