<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practise_session4</title>
</head>
<body>
    <?php

    // if & else statement in php 
    
    $age = 51;

    if($age<=50){
        echo "you can drive";
    }
    elseif($age>=50){
        echo "you are over age for driving";
    }
    else{
        echo "you are under age for drive";
    }
    
    echo "<br>";

    // switch statement 

    $day = "monday";

    switch ($day) {
        case 'tuesday':
            echo "the day is tuesday";
            break;
        
        default:
            echo "i cant understand the day";
            break;
    }
    echo "<br>";
    // for each loop in array 

    $student = array(
        "shariq" => "500",
        "hamza" => "400",
        "bilal" => "300",
        "abdullah" => "200",
        "taha" => "100"
    );

    foreach($student as $std => $value){
        echo "$std = $value <br>";
    }

    // table of 2 with for loop
    for ($i=1; $i <=15 ; $i++) { 
        echo "2 *" .$i. "= " .(2*$i). "<br>";
    }

    // for loop with break & continue 
    for($j=1; $j<=15; $j++){

        if($j==9){
            continue;
        }
            elseif($j==14){
                break;
            }
        echo "$j<br>";
    }

    ?>
</body>
</html>