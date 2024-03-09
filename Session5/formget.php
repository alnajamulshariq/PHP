<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }
    .form_body{
        max-width: 80%;
        margin: auto;
        padding: 23px;
        background-color: beige;
    }
    h1{
        text-align: center;
        color: royalblue;
    }
    .btncls{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #btn_sub{
      width: 80%;
    }
    label{
      font-weight: bold;
      letter-spacing: 1.6px;
    }
  </style>
  <div class="form_body">
    <h1>FORM VIA PHP</h1>

    <form action="formget.php" method="GET">
        <label for="" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="">
        <br><br>
        <label for="" class="form-label">Age:</label>
        <input type="text" class="form-control" name="age" id="">
        <br><br>
        <label for="" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="">
        <br><br>
        <label for="" class="form-label">City:</label>
        <input type="text" class="form-control" name="city" id="">
        <br><br>
        <label for="" class="form-label">Gender:</label>

        <label for="" class="form-label">Male:</label>
        <input type="radio" name="gender" value="male" id="">

        <label for="" class="form-label">Female:</label>
        <input type="radio" name="gender" value="female" id="">
        <br><br>
        <div class="btncls">
        <input type="submit" id="btn_sub" class="btn btn-outline-info" value="Submit" name="submitbtn">
        </div>
    </form>

    </div>


    <?php
    if (isset($_GET['submitbtn'])) {
        
    

    $form_name = $_GET['name'];
    $form_age = $_GET['age'];
    $form_email = $_GET['email'];
    $form_city = $_GET['city'];
    $form_gender = $_GET['gender'];


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