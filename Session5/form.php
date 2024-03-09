<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>FORM HANDLING IN PHP</h1>

<form action="form.php" method="get">

<label for="">NAME</label>
<input type="text" name="name" id="">
<br><br>
<label for="">AGE</label>
<input type="text" name="age" id="">
<br><br>
<label for="">EMAIL</label>
<input type="email" name="email" id="">
<br><br>
<label for="">CITY</label>
<input type="text" name="city" id="">
<br><br>

<label for="">GENDER:</label>

<label for="">MALE</label>
<input type="radio" name="gender"  value="male" id="">

<label for="">FEMALE</label>
<input type="radio" name="gender" value="female" id="">
<br><br>
<input type="submit" value="SUBMIT" name="submitbtn">

</form>


<?php

if(isset($_GET['submitbtn'])){



$std_name=$_GET['name'];
$std_age=$_GET['age'];
$std_email=$_GET['email'];
$std_city=$_GET['city'];
$std_gender=$_GET['gender'];


echo "student name is:".$std_name."<br>";
echo "student age is:".$std_age ."<br>";
echo "student email is:".$std_email."<br>";
echo "student city is:".$std_city ."<br>";
echo "student gender is:".$std_gender;


}
?>
    
</body>
</html>