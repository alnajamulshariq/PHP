<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session8</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: royalblue;
        }
        .container{
            margin: auto;
            padding: 25px;
            max-width: 80%;
            background-color: rgb(204, 253, 255);
        }
        h1{
            text-align: center;
            color: crimson;
            text-decoration: underline;
        }
        h2{
            color: navy;
        }

    </style>

</head>
<body>
    
<div class="container">
<h1>SINGLE DIMENSIONAL ARRAY & LOOPS IN PHP</h1>
<br><br><br>
<h2>SINGLE DIMENSIONAL ARRAY PRINT BY INDEXING</h2>
<br>

<?php

$arr1 = array('shariq', 10, 'bhatti', 20, 'abdullah', 30);
echo $arr1[0]."<br>";
echo $arr1[1]."<br>";
echo $arr1[2]."<br>";
echo $arr1[3]."<br>";
echo $arr1[4]."<br>";
echo $arr1[5]."<br>";

?>
<br>

<h2>SINGLE DIMENSIONAL ARRAY PRINT BY FOR LOOP</h2>
<br>

<?php
$arr2 = array('muhammad', 10, 'shariq', 20, 'najam', 30, 'ansari', 40, 'hafiz', 50, 'abdullah');

for ($i=0; $i < count($arr2) ; $i++) { 
    echo $arr2[$i]."<br>";
}
?>
<br>

<h2>SINGLE DIMENSIONAL ARRAY PRINT BY WHILE LOOP</h2>
<br>

<?php
$arr3 = array('bilawal', 10.5, 'bhatti', 100, 'shoaib', 150, 'mansoor', 50);
$a=0;
while ($a < count($arr3)) {
    echo $arr3[$a]."<br>";
    $a++;
}
?>
<br>

<h2>SINGLE DIMENSIONAL ARRAY PRINT BY DO WHILE LOOP</h2>
<br>

<?php
$arr4 = array('jungle', 'forest', 'water', 'fire', 'air', 'sun', 'earth', 'moon', 'mars');

$a = 0;
do {
    echo $arr4[$a]."<br>";
    $a++;
} while ($a < count($arr4));

?>
<br>

<h2>SINGLE DIMENSIONAL ARRAY PRINT BY FOREACH LOOP</h2>
<br>

<?php
$arr5 = array("mecury", 'venus', 'earth', 'mars', 'jupiter', 'saturn');
foreach ($arr5 as $key) {
    echo $key."<br>";
}
?>
<br>

<h1>MULTI DIMENSIONAL ARRAY & LOOPS IN PHP</h1>
<br><br><br>

<h2>MULTI DIMENSIONAL ARRAY PRINT BY FOR LOOP 1st METHOD</h2>
<br>
<?php
$students = [
    [1, 'shariq', 97.5],
    [2, 'bilal', 92],
    [3, 'abdullah', 90],
    [4, 'bhatti', 88],
    [5, 'ali', 86]
];

for ($i=0; $i <count($students) ; $i++) { 
    for ($j=0; $j <count($students[$i]) ; $j++) { 
        echo $students[$i][$j]." ";
    }
    echo "<br>";
}
?>
<br>

<h2>MULTI DIMENSIONAL ARRAY PRINT BY FOR LOOP 2nd METHOD</h2>


 <?php
 $students2 = [

     [1,"ali",10],
     [2,"hamza",11],
     [3,"shariq",12],
     [4,"abdullah",13]

 ];

 for($row=0; $row<=2; $row++){
     echo "<br>";
     for($col=0; $col<=2; $col++){


         echo $students2[$row][$col]." ";
     }
 }
?>
<br><br>

<h2>MULTI DIMENSIONAL ARRAY PRINT BY FOREACH LOOP 1st METHOD</h2>
<br>

<?php
$students3 = [
    [1,"siddiq",50],
    [2,"nabeel",110.5],
    [3,"hamid",98],
    [4,"shafqat",55]
];

foreach ($students3 as $key) {
    foreach ($key as $detail) {
        echo $detail . " ";
    }
    echo "<br>";
}
?>
<br>

<h2>MULTI DIMENSIONAL ARRAY PRINT BY FOREACH LOOP 2nd METHOD</h2>
<br>

<?php
$students4 = [
    [1,"shabana",100],
    [2,"farzana",99.5],
    [3,"rehana",95],
    [4,"rizwana",68.5]
];

foreach ($students4 as $key) {
    echo $key[0]." ";
    echo $key[1]." ";
    echo $key[2]." ";
    echo "<br>";
}

?>
<br>

<h1>ASSOCIATIVE ARRAY & LOOPS IN PHP</h1>
<br><br><br>

<h2>ASSOCIATIVE ARRAY PRINT IN TABLE</h2>
<br>

<?php
$employees = [

    "emp_detail"=>
    [1,"habib",25],
    [2,"saqib",26],
    [3,"afzal",18],
    [4,"burhan",23]

];



echo "<table border='1'>";
echo "<tr>";
echo "<th>S.No</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";

echo "</tr>";

echo "<tr>";
echo "<td>".$employees["emp_detail"][0]."</td>";
echo "<td>".$employees["emp_detail"][1]."</td>";
echo "<td>".$employees["emp_detail"][2]."</td>";

echo "</tr>";

echo "<tr>";
echo "<td>".$employees[0][0]."</td>";
echo "<td>".$employees[0][1]."</td>";
echo "<td>".$employees[0][2]."</td>";

echo "</tr>";

echo "<tr>";
echo "<td>".$employees[1][0]."</td>";
echo "<td>".$employees[1][1]."</td>";
echo "<td>".$employees[1][2]."</td>";

echo "</tr>";

echo "<tr>";
echo "<td>".$employees[2][0]."</td>";
echo "<td>".$employees[2][1]."</td>";
echo "<td>".$employees[2][2]."</td>";

echo "</tr>";

echo "</table>";

?>
<br>

<h2>ASSOCIATIVE ARRAY PRINT BY FOREACH LOOP</h2>
<br>

<?php

$emp = [
    ["EMP Id:" => "ABE 001",
    "EMP Name:" => "Shariq Najam",
    "EMP Designation:" => "Secretary",
    "EMP Salary:" => "100000"],

    ["EMP Id:" => "ABE 002",
    "EMP Name:" => "Muhammad Hamza",
    "EMP Designation:" => "Computer Operator",
    "EMP Salary:" => "50000"],

    ["EMP Id:" => "ABE 003",
    "EMP Name:" => "Hafiz Abdullah",
    "EMP Designation:" => "Senior Clerk",
    "EMP Salary:" => "40000"],

    ["EMP Id:" => "ABE 004",
    "EMP Name:" => "Bilal Ahmed",
    "EMP Designation:" => "Junior Clerk",
    "EMP Salary:" => "30000"],

    ["EMP Id:" => "ABE 005",
    "EMP Name:" => "Syed Ali",
    "EMP Designation:" => "Acoountant",
    "EMP Salary:" => "70000"]
];

foreach ($emp as $empdet) {
    foreach ($empdet as $key => $value) {
        echo "$key $value<br>";
    }
    echo "<br>";
}

?>

</div>


</body>
</html>