<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 3</title>
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

<h1>SESSION:3 DIFFERENT TYPES OF ARRAY & DIFFERENT LOOPS</h1>
<br><br>
<?php 
// array declaration method 1 

echo "<h2>Array Declaration Method 1</h2>";

$array1 = array("shariq", "hamza", "bilal", "abdullah", "munna");
echo $array1 [0]. "<br>";
echo $array1 [1]. "<br>";
echo $array1 [2]. "<br>";
echo $array1 [3]. "<br>";
echo $array1 [4]. "<br>";


echo count($array1);
echo "<br><br>";

// array declaration method 2 

echo "<h2>Array Declaration Method 2</h2>";

$array2 = array(1, 10, 20, 30, 40);
echo $array2[0]. "<br>";
echo $array2[1]. "<br>";
echo $array2[2]. "<br>";
echo $array2[3]. "<br>";
echo $array2[4]. "<br>";

echo count($array2);
echo "<br><br>";

// array declaration method 3 with for each loop

echo "<h2>Array Declaration Method 3 Through ForEach Loop</h2>";

$array3 = array("shariq", 100, "bilal", 250, "hamza", 300);
foreach ($array3 as $value) {
    echo "<br> the value of languages in ForEach Loop is: ";
    echo $value;
}
echo "<br><br><br>"; 

// array declaration method 4 with for loop

echo "<h2>Array Declaration Method 4 Through For Loop</h2>";

$array4 = array("abdullah", 400, "noman", 300, "sawati", 300.99);

for ($i=0; $i < count ($array4) ; $i++) { 
    echo "<br> The value of our item is in for loop:  ";
    echo $array4[$i];
}

echo "<br><br>";


// array declaration method 5 with while loop 

echo "<h2>Array Declaration Method 5 Through While Loop</h2>";

$array5 = array("najam", 200.5, "hamza", 1911, "munna", 100.5, "thanos", 1095);
    $index = 0;
while ($index < count($array5)) {
    echo $array5[$index] . "<br>";
    $index++;
}

echo "<br> <br>";


// array declaration method 6 with do - while loop 

echo "<h2>Array Declaration Method 6 Through Do-While Loop</h2>";

$array6 = array("azeem", 400.5, "azam", 105, "bacha", 202, "haji", 1095);


$index = 0;
do {
    echo $array6[$index] . "<br>";
    $index++;
} while ($index < count($array6));


echo "<br> <br> <br>";

$commodities = array("rice", "wheat", "milk", "tea", "barley", "bread", "eggs","biscuits", "yogurt");

foreach ($commodities as  $items) {
    echo $items."<br>";
}
echo "<br>";

for ($i=0; $i < count($commodities) ; $i++) { 
    echo $commodities[$i]."<br>";
}
?>
</div>
    
</body>
</html>