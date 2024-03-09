<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2 PHP</title>
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
        background-color: lightpink;
    }
    h1{
        text-align: center;
        color: seagreen;
        text-decoration: underline;
    }
    table{
        margin: auto;
        border:2px solid blue;
    }
    
</style>
<body>

<?php
$Std_Name = "Muhammad Scharique Najam Ansari";
$Std_Id = 007;
$English = 95;
$Mathematics = 100;
$Chemistry = 85;
$Physics = 90;
$Urdu = 92;
$Total_Marks = 500;
$Obtained_Marks = $English + $Mathematics + $Chemistry + $Physics + $Urdu;
$Percentage = $Obtained_Marks*100/$Total_Marks;
$Grade = "";


if ($Percentage >= 90) {
    $Grade = "A1+";
}
elseif ($Percentage >= 80) {
    $Grade = "A1";
}
elseif ($Percentage >= 70) {
    $Grade = "A";
}
elseif ($Percentage >= 60) {
    $Grade = "B";
}
elseif ($Percentage >= 50) {
    $Grade = "C";
}
else{
    $Grade = "Paisa Barbad Hai";
}
?>
<div class="container">

<h1>Mark-Sheet Using PHP</h1>


<p><strong>Student Name:</strong> <?php echo $Std_Name; ?></p>
    <p><strong>Student ID:</strong> <?php echo $Std_Id; ?></p>
    
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>Marks Obtained</th>
        </tr>
        <tr>
            <td>ENGLISH</td>
            <td><?php echo $English; ?></td>
        </tr>
        <tr>
            <td>MATHEMATICS</td>
            <td><?php echo $Mathematics; ?></td>
        </tr>
        <tr>
            <td>CHEMISTRY</td>
            <td><?php echo $Chemistry; ?></td>
        </tr>
        <tr>
            <td>PHYSICS</td>
            <td><?php echo $Physics; ?></td>
        </tr>
        <tr>
            <td>URDU</td>
            <td><?php echo $Urdu; ?></td>
        </tr>
        <tr>
            <th>Obtained Marks</th>
            <td><?php echo $Obtained_Marks; ?></td>
        </tr>
        <tr>
            <th>Total Marks</th>
            <td><?php echo $Total_Marks; ?></td>
        </tr>
        <tr>
            <th>Percentage</th>
            <td>
            <?php 
            echo $Percentage . '%'; ?>
            </td>
        </tr>
        <tr>
            <th>Grade</th>
            <td><?php echo $Grade; ?></td>
        </tr>
    </table>





    <!-- data types in php  -->

    <?php
echo "<h1>We Are Learning Data Types In PHP</h1>". "<br>";

$name = "shariq";
$age = 26;
$price = 99.101;
echo var_dump($name);
echo "<br>";
echo var_dump($age);
echo "<br>";
echo var_dump($price);
echo "<br>";
$name2 = strlen("najam");
echo $name2;
echo "<br>";
$name3 = str_word_count("hello this is Mr. Shariq Najam");
echo $name3;
echo "<br>";
$name4 = strrev("this is reverse string");
echo $name4;
echo "<br>";
$name5 = strpos("where", "e");
echo $name5;
echo "<br>";
$name6 = str_replace("Shariq","Najam","Ansari");
echo $name6;
echo "<br> <br> <br>";
?>
    </div>
</body>
</html>