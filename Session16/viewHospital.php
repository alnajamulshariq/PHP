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

        ul li {
            margin-left: 13px;
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
                    <p class="bold"><?php echo "$row[name]" ?></p>
                    <p>Admin</p>
                </div>

            </div>

        </div>

        <div class="viewHospCont">
            <h1>Hospital Details</h1>
            <?php
            $joinTable = "SELECT hospital_tbl.*, city_tbl.name as 'cname' FROM hospital_tbl INNER JOIN city_tbl ON hospital_tbl.cid=city_tbl.id WHERE hospital_tbl.id=$_GET[id]";
            $result = mysqli_query($connection, $joinTable);
            $row = mysqli_fetch_assoc($result);
            ?>
            <img src="./assets/natHospital.jpg" alt="" style="width: 300px; height: 200px;">
            <ul>
                <li>Hospital ID: <?php echo "$row[id]" ?></li>
                <li>Hospital Name: <?php echo "$row[name]" ?></li>
                <li>Hospital Contact: <?php echo "$row[contact]" ?></li>
                <li>City: <?php echo "$row[cname]" ?></li>
                <li>Hospital Email: <?php echo "$row[email]" ?></li>
                <li>Hospital Password: <?php echo "$row[password]" ?></li>
                <li>Hospital Address: <?php echo "$row[address]" ?></li>
                <li>Hospital Status: <?php echo "$row[status]" ?></li>
            </ul>
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