<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .mydiv{
        max-width: 80%;
        background-color: rgb(223, 247, 243);
        margin: auto;
        padding: 26px;
    }
    h2{
        text-align: center;
    }
</style>


<body>

<div class="mydiv">
    
<h2>Learn About GetType Function</h2>

<?php

// let learn about gettype function 

$num1 = 10;
$num2 = 30.5;
$title = 'shariq';

echo gettype($num1);
echo '<br><br>';

echo gettype($num2);
echo '<br><br>';

echo gettype($title);
echo '<br><br>';



?>


<h2>Learn About Non-Parametric Functions</h2>

<?php

echo'<h3>Even Number Through Modulus</h3>';

function even_number(){
    for ($i=0; $i<=10; $i++)
    {
        if($i%2 ==0){
            echo '<br>'. $i;
        }
    }
}
even_number();


?>

<h2>Learn About Parametric Functions With Default Parameter</h2>



<?php
function value(int $val_default=1000000000000){
echo "The Value Is :  $val_default <br>";
}
value(300);
value();
value(135);
value(150);

?>

<h2>Learn Pre-Define String Functions</h2>


<?php 
    
    // data types

    $name=strlen('pakistan');
    echo $name;
    $age=25;
    $price=99.5;

    var_dump($name.'<br>');
    var_dump($age);
    var_dump($price);

    $name=str_word_count('this function will count number of words in a statement ');
    echo $name.'<br>';


    $name1=strrev('asghar ali');
    echo $name1.'<br>';

    $name2=strpos('wajid','d');
    echo $name2.'<br>';

    $name3=str_replace('welcome','metrostargate','hello');
    echo $name3;

    ?>

<h2>FOR EACH LOOP IN ASSOCIATIVE ARRAY</h2>

<?php
$commodities = array ("Rice" => "10 kg",
"Atta" => "20 kg",
"Lentils" => "5 kg",
"Oil" => "5 Litre",
"Ghee" => "3 Litre",
"Fruits" => "10 kg",
"Vegetable" => "15 kg"
);

foreach ($commodities as $a => $items) {
    echo "$a = $items <br>";
}

?>

<h2>RETURN FUNCTION IN PHP</h2>

<?php

function add($x,$y){
    return $x+$y;
}

echo add(50,60);

?>



</div>
</body>
</html>