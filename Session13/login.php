<?php
include('conc.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* style.css */

        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
        }

        /* Center the login page vertically and horizontally */
        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        /* Style the login form container */
        .form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* Style the login header */
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-header h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .login-header p {
            font-size: 14px;
            color: #777;
        }

        /* Style the input fields */
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s;
        }

        input[type="email"]:hover {
            transform: scale(1.05);
            border: 1px solid crimson;

        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s;
        }

        input[type="password"]:hover {
            transform: scale(1.05);
            border: 1px solid crimson;

        }



        /* Style the login button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }


        /* Style the "Not registered?" link */
        /* .message {
            font-size: 14px;
            color: #777;
            text-align: center;
        }

        .message a {
            color: #007bff;
            text-decoration: none;
        }

        .message a:hover {
            text-decoration: underline;
        } */
    </style>
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <div class="login-page">
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3>ADMIN LOGIN</h3>
                        <p>Please enter your credentials to login.</p>
                    </div>
                </div>
                <form action="" method="post" class="login-form">
                    <input type="email" placeholder="Please Enter Your Email" name="email" required>
                    <input type="password" placeholder="Please Enter Your Correct Password" name="pass" required><br><br>
                    <input type="submit" value="login" name="btnlogin"><br><br>
                    <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['btnlogin'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $selectAll = "SELECT * FROM admin_tbl WHERE email = '$email' and password = '$pass'";
        $result = mysqli_query($connection, $selectAll);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['admin_session'] = $row['id'];

            echo "<script>
            alert('You Are Login Successfully');
            window.location.href='index.php';
            </script>";
        } else {
            echo "Login Failed";
        }
    }

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>