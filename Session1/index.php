<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <h1>First Session Of Php</h1>


    <h3>writing our first code in php</h3>
    <?php

    // here is writing our first php code

    echo ("hello world! welcome to php.</br>");
    echo ("this is second line of php.</br>");

    // now here i declare our variable in php 

    $newVar = "this is string is in saved in a variable namely newVar";
    echo $newVar;
    echo "<br>";

    // find out data type in php by using following procedure 

    $a = "hello dear i am here";
    $b = 123;
    $c = 99.123;
    $d = true;

    echo var_dump($a)."<br>";
    echo var_dump($b)."<br>";
    echo var_dump($c)."<br>";
    echo var_dump($d)."<br>";

    // now here we use arithmetic operators 

    $val1 = 10;
    $val2 = 5;

    echo "the sum of val1 and val2 is ".($val1+$val2)."<br>";
    echo "the subtraction of val1 and val2 is ".($val1-$val2)."<br>";
    echo "the multiplication of val1 and val2 is ".($val1*$val2)."<br>";
    echo "the division of val1 and val2 is ".($val1/$val2)."<br>";






    ?>
    
</body>
</html>