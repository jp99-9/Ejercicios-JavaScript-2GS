<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios loops</title>
</head>

<body>
    <?php
    /*5. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.*/

    echo "Ejercicio 5 <br>";

    function factorial($n){
        for ($i=1; $i <= $n; $i++) { 
           echo $i*$i+1;
        }
    }
    echo factorial(6);

    ?>
</body>

</html>