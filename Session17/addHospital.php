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

        /* here we design our add new hospital form  */

        .addNewHospitalContainer {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hospitalForm {
            background-color: #12171e;
            padding: 8px 15px;
            width: 70%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .formTitle h1 {
            text-align: center;
            color: #fff;
            font-weight: 600;
            letter-spacing: 2px;
        }

        /* style input fields  */
        .insideFormDiv {
            display: flex;
            /* Enables Flexbox */
            justify-content: space-between;
            /* Spaces out the child elements evenly */
            padding: 0;
            /* Adjust padding as needed */
            margin-top: 15px;
        }

        .inputGroup {
            flex: 1;
            /* Allows the child elements to grow and take up equal space */
            margin: 0 10px;
            /* Adds spacing between the two fields */
        }

        .inputGroup label {
            display: block;
            /* Makes the label take the full width */
            color: #fff;
            margin-bottom: 5px;
            /* Adds a little space below the label */
        }

        .inputGroup input[type="text"] {
            width: 100%;
            /* Makes the input take the full width of its parent */
            padding: 8px;
            /* Adds some padding inside the input */
            border: 1px solid #ccc;
            /* Adds a border to the input */
            border-radius: 4px;
            /* Rounds the corners of the input border */
        }

        #textarea input[type="text"] {
            width: 100%;
            padding: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .inputGroup input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .inputGroup input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .inputGroup input[type="submit"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            margin: 22px auto;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* here we styling drop down area of our for  */

        .dropDownSec {
            display: flex;
            justify-content: space-between;
            padding: 0;
            margin-top: 15px;
        }

        .ddGroup {
            flex: 1;
            margin: 0 10px;
        }

        .ddGroup label {
            color: #fff;
            display: block;
            margin-bottom: 5px;
        }

        .ddGroup select,
        .ddGroup input[type="text"],
        .ddGroup input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .custom-file-label {
            background-color: #088F8F;
            color: #fff;
            text-align: center;
            font-weight: 500;
            padding: 8px;
            margin-top: 3px;
            margin-bottom: 3px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-file-label:hover {
            background-color: #097969;
        }

        @media (max-width: 768px) {
            .dropDownSec {
                flex-direction: column;
            }

            .ddGroup {
                margin: 0 0 10px 0;
            }
        }






        /* label {
            color: #fff;
            margin-left: 30px;
        } */

        /* dropdown styling  */

        #selStatus {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            font-size: 16px;
            color: #333;
            /* margin-bottom: 20px; */
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #selStatus option {
            padding: 5px;
        }

        #selCity {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            font-size: 16px;
            color: #333;
            /* margin-bottom: 20px; */
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #selCity option {
            padding: 5px;
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



        <!-- add new hospital page work start  -->

        <div class="addNewHospitalContainer">


            <div class="hospitalForm">

                <div class="formTitle" style="margin-top: 10px;">
                    <h1>Register A New Hospital</h1>

                </div>

                <div class="formData">


                    <!--form starts here    form starts here    form starts here    form starts here  -->



                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="insideFormDiv">

                            <div class="inputGroup">

                                <label for="">Hosital Name:</label>
                                <input type="text" placeholder="Please Enter Hospital Name" name="name" required value="">

                            </div>

                            <div class="inputGroup">

                                <label for="">Contact No:</label>
                                <input type="text" placeholder="Please Enter Hopsital Contact No" name="contact" required value="">

                            </div>

                        </div>



                        <div class="insideFormDiv">

                            <div class="inputGroup">
                                <label for="">Email ID:</label>
                                <input type="email" placeholder="Please Enter Hospital Email ID" name="email" required value="">

                            </div>

                            <div class="inputGroup">
                                <label for="">Password:</label>
                                <input type="text" placeholder="Please Enter The Hosital Password" name="password" required value="">

                            </div>

                        </div>



                        <div class="dropDownSec">

                            <div class="ddGroup">

                                <label for="">Status:</label>
                                <select name="sel_status" id="selStatus">
                                    <option value="hidden" disabled selected style="display: none;">Choose a status</option>
                                    <option value="active">Activate</option>
                                    <option value="deactive">De-Activate</option>
                                </select>

                            </div>


                            <div class="ddGroup">

                                <label for="">Location:</label>
                                <select name="sel_city" id="selCity">
                                    <option value="hidden" disabled selected style="display: none;">Choose a city</option>

                                    <?php
                                    $selAllFromCity = "SELECT * FROM city_tbl";
                                    $result = mysqli_query($connection, $selAllFromCity);
                                    foreach ($result as $row) {
                                        echo "<option value='$row[id]'>$row[name]</option>";
                                    }
                                    ?>

                                </select>

                            </div>


                            <div class="ddGroup">

                                <label for="">Image:</label>
                                <input type="file" name="image" id="fileInput" style="display: none;">
                                <label for="fileInput" class="custom-file-label" style="margin-top: 3px; margin-bottom:3px; margin-left: 1px;">Choose File</label>

                            </div>

                        </div>

                        <div class="insideFormDiv">

                            <div class="inputGroup" id="textarea">
                                <label for="">Address:</label>
                                <input type="text" placeholder="Please Enter The Hosital Address" name="textarea" required value="">
                            </div>

                        </div>


                        <div class="insideFormDiv">

                            <div class="inputGroup">
                                <input type="submit" value="Add NEW HOSPITAL" name="dataInsertBtn">
                            </div>

                        </div>

                    </form>

                    <?php

                    if (isset($_POST['dataInsertBtn'])) {
                        $h_name = $_POST['name'];
                        $h_contact = $_POST['contact'];
                        $h_email = $_POST['email'];
                        $h_password = $_POST['password'];
                        $h_status = $_POST['sel_status'];
                        $h_city = $_POST['sel_city'];
                        $h_snap = $_FILES['image']['name'];
                        $h_tempName = $_FILES['image']['tmp_name'];
                        $h_path = "./assets/hospitalPics/$h_snap";
                        move_uploaded_file($h_tempName, $h_path);
                        $h_textarea = $_POST['textarea'];


                        $insertQuery = "INSERT INTO hospital_tbl (name, contact, email, password, status, cid, image, address) VALUES ('$h_name', '$h_contact', '$h_email', '$h_password', '$h_status', '$h_city', '$h_path', '$h_textarea')";
                        $result = mysqli_query($connection, $insertQuery);


                        if ($result == true) {
                            echo "
                            <script>alert('Your Data Has Been Inserted Successfully')</script>;
                            <script>window.location.href='hospital.php'</script>
                            ";
                        } else {
                            echo "
                            <script>alert('Your Data Submission Failed')</script>;
                            <script>window.location.href='addHospital.php'</script>;
                            ";
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