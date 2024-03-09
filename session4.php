<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 4 Arrays</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        margin: auto;
        padding: 23px;
        background-color: beige;
    }
    h1{
        text-align: center;
        color: royalblue;
    }
    h2{
        color: blueviolet;
    }
    
</style>
<body>

<div class="container">

<h1>SESSION NO. 5 ARRAYS / CONDITIONAL STATEMENTS & FLOW CONTROL</h1>

<?php
// if else statements in php 
echo "<br>";
echo"<h2>IF & ELSE STATEMENTS IN PHP</h2>";
echo"<h3>your riding status is here</h3>";
$age = 17;
if($age>18){
    echo ("you can ride a bike");
}
elseif ($age==17) {
    echo ("you can try to ride a bike only for testing purpose");
}
else{
    echo("you can not ride a bike");
};

echo "<br> <br>";

echo "<h2>SWITCH STATEMENT IN PHP</h2>";


// Assign a number to a variable
$day = "Monday";

switch ($day) {
    case 'Tuesday':
        echo "the day is tuesday";
        break;
        
        case 'Wednesday':
            echo "the day is wednesday";
            break;

            case 'Thursday':
                echo "the day is thurssday";
                break;

                case 'Friday':
                    echo "the day is friday";
                    break;

                    case 'Saturday':
                        echo "the day is saturday";
                        break;

                        case 'Sunday':
                            echo "the day is sunday";
                            break;

                            case 'Monday':
                                echo "the day is monday";
                                break;
    
    default:
        echo "dafa ho ja";
        break;
}

echo "<br><br>";

echo "<h2>FOR EACH LOOP IN ASSOCIATED ARRAY</h2>";

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

echo "<br>";

echo "<h2>FOR LOOP WITH CONTINUE STATEMENT</h2>";

for ($i=0; $i < 15 ; $i++) { 
    if($i == 10){
        continue;
    }
    echo "Serial Number Is: $i <br>";
}

echo "<br><br>";

echo "<h2>FOR LOOP WITH BREAK STATEMENT</h2>";

for ($i=0; $i < 15 ; $i++) { 
    if($i == 10){
        break;
    }
    echo "Serial Number Is: $i <br>";
}


echo "<br><br>";

echo "<h2>MULTI DIMENSIONAL ARRAY</h2>";


$empDetail = array (
    array (
        "EMP Id:" => "ABE 001",
        "EMP Name:" => "Shariq Najam",
        "EMP Designation:" => "Secretary",
        "EMP Salary:" => "100000",
    ),
    array (
        "EMP Id:" => "ABE 002",
        "EMP Name:" => "Muhammad Hamza",
        "EMP Designation:" => "Computer Operator",
        "EMP Salary:" => "50000",
    ),
    array (
        "EMP Id:" => "ABE 003",
        "EMP Name:" => "Hafiz Abdullah",
        "EMP Designation:" => "Senior Clerk",
        "EMP Salary:" => "40000",
    ),
    array (
        "EMP Id:" => "ABE 004",
        "EMP Name:" => "Bilal Ahmed",
        "EMP Designation:" => "Junior Clerk",
        "EMP Salary:" => "30000",
    ),
    array (
        "EMP Id:" => "ABE 005",
        "EMP Name:" => "Syed Ali",
        "EMP Designation:" => "Acoountant",
        "EMP Salary:" => "70000",
    )
    );

    foreach ($empDetail as $employee) {
        foreach ($employee as $key => $value) {
            echo "$key $value<br>";
        }
        echo "<br>";
    }


// $monthSalary = array (
//     "January" => "Rs. 20000",
//     "February" => "Rs. 30000",
//     "March" => "Rs. 40000",
//     "April" => "Rs. 450000",
//     "May" => "Rs. 50000",
//     "June" => "Rs. 55000",
//     "July" => "Rs. 60000",
//     "August" => "Rs. 65000",
//     "September" => "Rs. 70000",
//     "October" => "Rs. 75000",
//     "November" => "Rs. 80000",
//     "December" => "Rs. 100000",
// );




?>

</div>
    
</body>
</html>