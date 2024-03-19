<?php
include("conc.php");

session_start();
if (!isset($_SESSION['admin_session'])) {
    echo "<script>window.location.href='login.php'</script>";
}

$selectAll = "SELECT * FROM admin_tbl WHERE id = $_SESSION[admin_session]";
$result = mysqli_query($connection, $selectAll);
$row = mysqli_fetch_assoc($result);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="style.css">

    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('assets/bg5.jpg');
            background-size: 100% 100%;
        }

        /* style input fields  */
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 5px 23px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s;
        }

        input[type="text"]:hover {
            transform: scale(1.05);
            border: 1px solid crimson;

        }

        input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 5px 23px;
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
            width: 90%;
            padding: 10px;
            margin: 5px 23px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s;
        }

        input[type="password"]:hover {
            transform: scale(1.05);
            border: 1px solid crimson;

        }

        input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin: 5px 23px;
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

        label {
            color: #fff;
            margin-left: 30px;
        }
    </style>
</head>

<body>


    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class='bx bxs-virus'></i>
                <span>Vaccination System</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <ul>


            <li>
                <a href="">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bx-plus-medical'></i>
                    <span class="nav-item">Hospital</span>
                </a>
                <span class="tooltip">Hospital</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bxs-user'></i>
                    <span class="nav-item">Patient</span>
                </a>
                <span class="tooltip">Patient</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bx-calendar'></i>
                    <span class="nav-item">Appointments</span>
                </a>
                <span class="tooltip">Appointments</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bx-test-tube'></i>
                    <span class="nav-item">Covid&nbsp;Test</span>
                </a>
                <span class="tooltip">Covid&nbsp;Test</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bxs-message-rounded-dots'></i>
                    <span class="nav-item">Feedback</span>
                </a>
                <span class="tooltip">Feedback</span>
            </li>


            <li>
                <a href="">
                    <i class='bx bx-globe'></i>
                    <span class="nav-item">Website</span>
                </a>
                <span class="tooltip">Website</span>
            </li>


            <li>
                <a href="logout.php">
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Sign&nbsp;Out</span>
                </a>
                <span class="tooltip">Sign&nbsp;Out</span>
            </li>


        </ul>
    </div>





    <div class="main-content">

        <div class="profile_upper_sec">

            <div class="admin_pic">

                <img src="./assets/admin.jpg" alt="me" class="user-img">
                <div class="pic_text">
                    <p class="bold">M. Shariq</p>
                    <p>Admin</p>
                </div>

            </div>

        </div>


        <!-- <div class="heading">
            <h1>Vaccination Management System</h1>
        </div> -->




        <!-- <div class="pic_text">
            <p class="bold">M. Shariq</p>
            <p class="admin_name">Admin</p>
        </div>

        <div class="dash_disp">

            <div class="patient">
                <h1 class="patient_disp">1504</h1>
                <p>Patient</p>
            </div>

            <div class="hospital">
                <h1 class="hospital_disp">80</h1>
                <p>Hospital</p>
            </div>

            <div class="appointments">
                <h1 class="appoint_disp">284</h1>
                <p>Appointments</p>
            </div>

            <div class="covidtest">
                <h1 class="covidtest_disp">200</h1>
                <p>Covid Test</p>
            </div>
        </div> -->
        <div class="profile_container">


            <div class="profileForm">

                <div class="updateTitle">
                    <h1>My Profile</h1>
                    <p>Please enter your credentials to update profile</p>
                </div>

                <div class="profileData">

                    <form action="" method="post">
                        <label for="">Name:</label><br>
                        <input type="text" placeholder="Please Enter User Name" name="name" required value="<?php echo $row['name'] ?>"><br><br>

                        <label for="">Email ID:</label>
                        <input type="email" placeholder="Please Enter Your Email ID" name="email" required value="<?php echo $row['email'] ?>"><br><br>

                        <label for="">Password:</label>
                        <input type="text" placeholder="Please Enter Your Correct Password" name="password" value="<?php $row['password'] ?>"><br><br><br>




                        <input type="submit" value="Update Profile" name="proupdate">




                    </form>

                    <?php

                    if (isset($_POST['proupdate'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $updateQuery = "UPDATE admin_tbl SET name = '$name', email = '$email', password = '$password' WHERE id = $_SESSION[admin_session]";
                        $result = mysqli_query($connection, $updateQuery);
                        if ($result == true) {
                            echo "<script>
                            alert('Profile Updated Successfully');
                            window.location.href='profile.php';
                            </script>";
                        }
                    }

                    ?>



                </div>
            </div>


        </div>

    </div>


</body>
<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle('active');
    };
</script>

</html>