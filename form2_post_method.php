<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Times New Roman', Times, serif;
    }
    body{
        background-color: rgb(162, 160, 160);
    }
    h1{
        color: hsl(0, 0%, 100%);
        text-shadow: 8px 10px 8px rgb(69, 66, 66);
    }
    #form_body{
        max-width: 70%;
        background-color: whitesmoke;
        border-radius: 12px;
        padding: 25px;
    }
    #btn_form{
        width: 80%;
        letter-spacing: 8px;
        font-size: 18px;
        font-weight: bold;
    }
    label{
        font-weight: 600;
        letter-spacing: 1.2px;
    }
    span{
        color: red;
    }
</style>
<body>

<div class="container text-center mt-3">
    <h1>FORM USING POST METHOD IN PHP</h1>
</div>

<div class="container mt-4" id="form_body">
    <form action="form2_post_method.php" onsubmit="return formValidation()" method="POST">

<div class="mb-3">
  <label for="" class="form-label">First Name:</label>
  <input type="text" class="form-control" id="fname" name="fname" placeholder="Please Enter Your First Name">
  <span id="fnerror" class="myspan"></span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Please Enter Your Last Name">
    <span id="lnerror" class="myspan"></span>
  </div>

<div class="mb-3">
    <label for="" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="xyz@example.com">
    <span id="emerror" class="myspan"></span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Age:</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Please Enter Your Age">
    <span id="agerror" class="myspan"></span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Contact No:</label>
    <input type="text" class="form-control" name="contact" id="cnt" placeholder="+92-123-4567-890">
    <span id="cnterror" class="myspan"></span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input type="password" class="form-control" name="password" id="pw" placeholder="Please Enter Your Password">
    <span id="pwerror" class="myspan"></span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Confirm Password:</label>
    <input type="password" class="form-control" name="cpassword" id="cpw" placeholder="Please Re-Enter Your  Password">
    <span id="cpwerror" class="myspan"></span>
</div>

<div class="">
    <label for="" class="form-label">Gender:</label>
</div>

<div class="form-check">
    <label for="" class="form-label">Male</label>
    <input type="radio" class="form-check-input" name="gender" id="" value="male">
</div>

<div class="form-check">
    <label for="" class="form-label">Female</label>
    <input type="radio" class="form-check-input" name="gender" id="" value="female">
</div>

<div class="mb-3 text-center">
    <input type="submit" value="SUBMIT" name="submit" class="btn btn-outline-info" id="btn_form">
</div>

    </form>

</div>


<script>
function formValidation() {

let firstName = document.getElementById("fname").value;
let lastName = document.getElementById("lname").value;
let email = document.getElementById("email").value;
let age = document.getElementById("age").value;
let contact = document.getElementById("cnt").value;
let pw = document.getElementById("pw").value;
let cpw = document.getElementById("cpw").value;

    var usercheck = /^[a-zA-Z. ]{3,20}$/;
    var emailcheck = /^[a-zA-Z_]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;
    var passcheck = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    var mobilecheck = /^[0-9]{11}$/;
    var agecheck = /^(0?[1-9]|[1-9][0-9]|[1][1-9][1-9]|200)$/;
    var txtareacheck = /^[a-zA-Z. ]{10,300}$/;

    
    if (usercheck.test(firstName)) {
        document.getElementById("fnerror").innerHTML = "";
    }
    else {
        document.getElementById("fnerror").innerHTML = " *** Your First Name Is Invalid ***";
        return false;
    }

    if (usercheck.test(lastName)){
        document.getElementById("lnerror").innerHTML = "";
    }
    else {
        document.getElementById("lnerror").innerHTML = "*** Your Last Name Is Invalid ***"
        return false;
    }
    if (emailcheck.test(email)){
        document.getElementById("emerror").innerHTML = "";
    }
    
    else {
        document.getElementById("emerror").innerHTML = "*** Your Email ID Is Invalid ***"
        return false;
    }
    if (agecheck.test(age)){
        document.getElementById("agerror").innerHTML = "";
    }
    else {
        document.getElementById("agerror").innerHTML = "*** Please Enter Your Correct Age ***"
        return false;
    }
    if (mobilecheck.test(contact)){
        document.getElementById("cnterror").innerHTML = "";
    }
    else {
        document.getElementById("cnterror").innerHTML = "*** Please Enter Your Correct Mobile Number ***"
        return false;
    }
    if (passcheck.test(pw)){
        document.getElementById("pwerror").innerHTML = "";
    }
    else {
        document.getElementById("pwerror").innerHTML = "*** Your Password Is Invalid ***"
    }
    if (passcheck.test(cpw)){
        document.getElementById("cpwerror").innerHTML = "";
    }
    else {
        document.getElementById("cpwerror").innerHTML = "*** Your Re_Enter Password Is Not Same As Your Password ***"
    }
}
</script>



<?php

if(isset($_POST['submit'])){

$empFirst_Name = $_POST['fname'];
$empLast_Name = $_POST['lname'];
$empEmail = $_POST['email'];
$empAge = $_POST['age'];
$empContact = $_POST['contact'];
$empPass = $_POST['password'];
$empCpass = $_POST['cpassword'];
$empGender = $_POST['gender'];


echo "Employee First Name is: ".$empFirst_Name."<br>";
echo "Employee First Name is: ".$empLast_Name."<br>";
echo "Employee Email ID is: ".$empEmail."<br>";
echo "Employee Age is: ".$empAge."<br>";
echo "Employee Contact Number is: ".$empContact."<br>";
echo "Employee Password is: ".$empPass."<br>";
echo "Employee Confirm Password is: ".$empCpass."<br>";
echo "Employee Gender is: ".$empGender."<br>";

}
?>


    
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>