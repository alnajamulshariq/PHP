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
    <title>Admin Panel</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('assets/bg5.jpg');
            background-size: 100% 100%;
        }

        .hospCont {
            margin-left: 25px;
        }

        .hospCont h1 {
            letter-spacing: 2.2px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            /* Collapse borders */
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .addNewHospital {
            padding: 10px;
            margin-left: 5px;
            background-color: rgb(255, 255, 4);
            color: red;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .addNewHospital:hover {
            background-color: rgb(240, 240, 16);
        }

        #addHospIcon {
            font-size: 16px;
            font-weight: bolder;
            color: green;
        }

        .add_hosp_btn_div {
            text-align: right;
        }

        .btnActivate {
            width: 40%;
            padding: 10px;
            margin-left: 5px;
            background-color: #018749;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btnActivate:hover {
            background-color: #006A4E;
        }

        .btnDeactivate {
            width: 35%;
            padding: 10px;
            margin-left: 5px;
            background-color: #E32636;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btnDeactivate:hover {
            background-color: #AA0000;
        }

        .btnView {
            width: 20%;
            padding: 10px;
            margin-right: 5px;
            background-color: #0047ab;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btnView:hover {
            background-color: #00008b;
        }

        .btnStatusCol {
            text-align: center;
        }

        .actionCol {
            text-align: center;
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
        <!-- <div class="user">
            <img src="admin.jpg" alt="me" class="user-img">
            <div>
                <p class="bold">M. Shariq</p>
                <p>Admin</p>
            </div>
        </div> -->
        <ul>


            <li>
                <a href="index.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>


            <li>
                <a href="hospital.php">
                    <i class='bx bx-plus-medical'></i>
                    <span class="nav-item">Hospital</span>
                </a>
                <span class="tooltip">Hospital</span>
            </li>


            <li>
                <a href="patient.php">
                    <i class='bx bxs-user'></i>
                    <span class="nav-item">Patient</span>
                </a>
                <span class="tooltip">Patient</span>
            </li>


            <li>
                <a href="appointments.php">
                    <i class='bx bx-calendar'></i>
                    <span class="nav-item">Appointments</span>
                </a>
                <span class="tooltip">Appointments</span>
            </li>


            <li>
                <a href="test.php">
                    <i class='bx bx-test-tube'></i>
                    <span class="nav-item">Covid&nbsp;Test</span>
                </a>
                <span class="tooltip">Covid&nbsp;Test</span>
            </li>


            <li>
                <a href="feedback.php">
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
                <a href="profile.php">
                    <!-- <img src="./assets/admin.jpg" alt="me" class="user-img"> -->
                    <img src="<?php echo $row['image'] ?>" alt="me" class="user-img">
                </a>
                <div class="pic_text">
                    <p class="bold">
                        <?php echo "$row[name]" ?>
                    </p>
                    <p>Admin</p>
                </div>

            </div>

        </div>



        <!-- here we work on our table  -->

        <div class="hospCont">
            <h1>List Of Hospitals</h1>
            <div class="add_hosp_btn_div">

                <?php
                echo "<a href='addHospital.php'><button class='addNewHospital'><i id='addHospIcon' class='bx bx-plus'></i>Hospital</button></a>
            " ?>




            </div><br>


            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                        <th class="actionCol">Action</th>
                    </tr>
                </thead>


                <tbody>
                    <?php


                    $selectAll = "SELECT * FROM hospital_tbl";

                    $result = mysqli_query($connection, $selectAll);
                    foreach ($result as $row) {
                        echo "
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[contact]</td>
                        <td>$row[status]</td>
                        <td class='btnStatusCol'><a href='viewHospital.php?id=$row[id]'><button class='btnView'>View</button></a>
                        
                        ";
                        if ($row['status'] == "deactive") {
                            echo "<a href='activateHospital.php?id=$row[id]'>
                            <button class='btnActivate'>Activate</button>
                            </a>";
                        } else {
                            echo "<a href='deactivateHospital.php?id=$row[id]'>
                            <button class ='btnDeactivate'>De-Activate</button>
                            </a>";
                        }


                        "</td>

            

                        

                        </tr>
                        ";
                    }



                    ?>
                </tbody>
            </table>
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