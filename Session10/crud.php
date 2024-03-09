<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        .container{
            max-width: 50%;
            padding: 25px;
            background-color: blanchedalmond;
            border-radius: 10px;
        }
        body{
            background-color: slategrey;
        }
        h2{
            color: royalblue;
            font-weight: 600;
        }
        label{
            font-weight: 600;
        }
        button{
            width: 40%;
            margin-top: 20px;
            letter-spacing: 4px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center">FORM - CRUD - PHP</h2>
        
    <form method="post">

  <div class="mb-3">
    <label for="" class="form-label">ID-No:</label>
    <input type="number" class="form-control" id="" name="empid" placeholder="Please Enter Your ID">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP Name:</label>
    <input type="text" class="form-control" id="" name="empname" placeholder="Please Enter Employee Name">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP Age:</label>
    <input type="number" class="form-control" id="" name="empage" placeholder="Please Enter Employee Age">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP Email:</label>
    <input type="email" class="form-control" id="" name="empemail" placeholder="Please Enter Employee E-Mail">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP Designation:</label>
    <input type="text" class="form-control" id="" name="empdes" placeholder="Please Enter Employee Designation">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP Salary:</label>
    <input type="number" class="form-control" id="" name="empsal" placeholder="Please Enter Employee Salary">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EMP City:</label>
    <input type="text" class="form-control" id="" name="empcity" placeholder="Please Enter Employee City">
  </div>

  <div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary" name="subreq">SUBMIT !</button>
  </div>

  

</form>

    </div>

                    <!-- there are 5 things for creating a connection to the database  -->


    <!-- 1- function for connection
    mysqli_connect(): it is used to connect db and web
    have for aurguments:

    2- host name
    hostname->localhost->127.0.0.1

    3- database username
    db username->root

    4- password 
    password-> " "

    5- database name
    dbname->aptech06b -->


    <!-- now we create a connection to our database  -->
    <?php

    $connection = mysqli_connect("localhost","root","","scharique");

        // now we test our connection 

        if($connection == true){
            echo "Database Successfully Connected";
        }
        else{
            echo "Database Not Connected";
        }

        if (isset($_POST['subreq'])) {
            $empID = $_POST['empid'];
            $empName = $_POST['empname'];
            $empAge = $_POST['empage'];
            $empEmail = $_POST['empemail'];
            $empDesig = $_POST['empdes'];
            $empSalary = $_POST['empsal'];
            $empCity = $_POST['empcity'];


            $insertQuery = "INSERT INTO emp_det values ($empID, '$empName', $empAge, '$empEmail', '$empDesig', $empSalary, '$empCity')";

            // to run our mysql query given below 

            $result = mysqli_query($connection, $insertQuery);

            if ($result == true){
                echo "Employee Data Successfully Inserted Into DataBase";
            }

        }


    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>