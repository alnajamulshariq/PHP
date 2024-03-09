<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
    }

    .container {
        margin: auto;
        padding: 25px;
        max-width: 95%;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }

    .profile-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
    }

    .profile-card:hover {
        background-color: #ebe1e1ec;
        box-shadow: 0 2px 4px #ebe1e1ec(0, 0, 2px, 0.3);
        transition: 0.3s;
    }

    .profile-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .profile-value {
        font-weight: bold;
        color: #333;
    }

    p {
        text-align: left;
        line-height: 30px;
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 25px;
    }
</style>

<body>

    <h1>SHOW EMPLOYEES DATA</h1>
    <div class="container">

        <div class="row">



            <?php
            include('conn.php');

            // now check our conn file is include or not 

            // if ($connection){
            //     echo "db connected";
            // }


            // now we show our record of our database 

            $selectAll = "SELECT * FROM emp_det";

            $result = mysqli_query($connection, $selectAll);

            foreach ($result as $row) {

                echo "<div id='column' class='profile-card col-lg-12 md-8 sm-4'>";
                echo "<h1 class='profile-title'>Employee Details</h1>";
                echo "<div class='profile-info'>";

                echo "<p><strong>ID:</strong> <span class='profile-value'>$row[emp_id]</span></p>";
                echo "<p><strong>Name:</strong> <span class='profile-value'>$row[emp_name]</span></p>";
                echo "<p><strong>Age:</strong> <span class='profile-value'>$row[emp_age]</span></p>";
                echo "<p><strong>Email:</strong> <span class='profile-value'>$row[emp_email]</span></p>";
                echo "<p><strong>Designation:</strong> <span class='profile-value'>$row[emp_designation]</span></p>";
                echo "<p><strong>Salary:</strong> <span class='profile-value'>$row[emp_salary]</span></p>";
                echo "<p><strong>City:</strong> <span class='profile-value'>$row[emp_city]</span></p>";


                echo " </div>";
                echo " </div>";
            }

            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>