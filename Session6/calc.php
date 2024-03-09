<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body>

<form action="calc.php" method="POST">

<label for="">VALUE 1:</label>
<input type="text" name="f_num">
<br><br>

<label for="">VALUE 2:</label>
<input type="text" name="s_num">

<br><br>

<input type="submit" value="Addition" name="calculate">

</form>

<?php


if(isset($_POST['calculate'])){
    if($_POST['f_num'] != "" && $_POST['s_num'] !=""){

        $value1 = $_POST['f_num'];
    $value2 = $_POST['s_num'];

    $dispRes = $value1 + $value2;

    echo "addtion of value1 + value2 is = " .$dispRes;
}
else {
    echo "please fill the input fields";
}
        
    }

    





?>
    
</body>
</html>