<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>FORM VIA PHP</h1>

    <form action="formpost.php" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" id="">
        <br><br>
        <label for="">Age:</label>
        <input type="text" name="age" id="">
        <br><br>
        <label for="">Email:</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="">City:</label>
        <input type="text" name="city" id="">
        <br><br>
        <label for="">Gender:</label>

        <label for="">Male:</label>
        <input type="radio" name="gender" value="male" id="">

        <label for="">Female:</label>
        <input type="radio" name="gender" value="female" id="">
        <br><br>

        <input type="submit" value="Submit" name="submitbtn">
    </form>


    <?php
    if (isset($_POST['submitbtn'])) {
        
    

    $form_name = $_POST['name'];
    $form_age = $_POST['age'];
    $form_email = $_POST['email'];
    $form_city = $_POST['city'];
    $form_gender = $_POST['gender'];


    echo "candidate name is:".$form_name."<br>";
    echo "candidate age is:".$form_age."<br>";
    echo "candidate email is:".$form_email."<br>";
    echo "candidate city is:".$form_city."<br>";
    echo "candidate gender is:".$form_gender."<br>";

    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>