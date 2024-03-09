<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        .container {
            max-width: 50%;
            padding: 25px;
            background-color: blanchedalmond;
            border-radius: 10px;
        }

        body {
            background-color: slategrey;
        }

        h2 {
            color: royalblue;
            font-weight: 600;
        }

        label {
            font-weight: 600;
        }

        button {
            width: 40%;
            margin-top: 20px;
            letter-spacing: 4px;
        }
    </style>
</head>

<body>

    <?php
    $empID_edit = $_GET['id'];
    $empName_edit = $_GET['name'];
    $empAge_edit = $_GET['age'];
    $empEmail_edit = $_GET['email'];
    $empDesig_edit = $_GET['designation'];
    $empSalary_edit = $_GET['salary'];
    $empCity_edit = $_GET['city'];

    ?>


    <div class="container">
        <h2 class="text-center">FORM - CRUD - PHP</h2>

        <form method="post">

            <div class="mb-3">
                <label for="" class="form-label">ID-No:</label>
                <input type="number" class="form-control" placeholder="Please Enter Your ID" readonly name="txtempid" value="<?php echo $empID_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP Name:</label>
                <input type="text" class="form-control" placeholder="Please Enter Employee Name" name="txtempname" value="<?php echo $empName_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP Age:</label>
                <input type="number" class="form-control" placeholder="Please Enter Employee Age" name="txtempage" value="<?php echo $empAge_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP Email:</label>
                <input type="email" class="form-control" placeholder="Please Enter Employee E-Mail" name="txtempemail" value="<?php echo $empEmail_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP Designation:</label>
                <input type="text" class="form-control" placeholder="Please Enter Employee Designation" name="txtempdes" value="<?php echo $empDesig_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP Salary:</label>
                <input type="number" class="form-control" placeholder="Please Enter Employee Salary" name="txtempsal" value="<?php echo $empSalary_edit ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">EMP City:</label>
                <input type="text" class="form-control" placeholder="Please Enter Employee City" name="txtempcity" value="<?php echo $empCity_edit ?>">
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" value="update" name="update">UPDATE !</button>
            </div>



        </form>

    </div>

    <?php
    include('conn.php');
    if (isset($_POST['update'])) {
        $empID_update = $_POST['txtempid'];
        $empName_update = $_POST['txtempname'];
        $empAge_update = $_POST['txtempage'];
        $empEmail_update = $_POST['txtempemail'];
        $empDesig_update = $_POST['txtempdes'];
        $empSalary_update = $_POST['txtempsal'];
        $empCity_update = $_POST['txtempcity'];

        $updateQuery = "UPDATE emp_tbl SET emp_name='$empName_update', age='$empAge_update', email='$empEmail_update', designation='$empDesig_update', salary='$empSalary_update', city='$empCity_update' WHERE id='$empID_update'";

        $result = mysqli_query($connection, $updateQuery);

        if ($result == true) {
            echo "<script>alert('Your Data Successfully Updated')</script>";
            echo "<script>window.location.href='showResult.php'</script>";
        }
    }
    ?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>