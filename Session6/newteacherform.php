<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container text-center mt-3">
    <h1>FORM USING POST METHOD IN PHP</h1>
</div>

<div class="container mt-4" id="form_body">
    <form action="newteacherform.php"  method="POST">

<div class="mb-3">
  <label for="" class="form-label">Name:</label>
  <input type="text" class="form-control" id="fname" name="fname" placeholder="Please Enter Your First Name">
  
</div>


<div class="mb-3">
    <label for="" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="xyz@example.com">
    
</div>



<div class="mb-3 text-center">
    <input type="submit" value="SUBMIT" name="submit" class="btn btn-outline-info" id="btn_form">
</div>

    </form>

</div>


<?php

if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
}

?>

<div class="container">
    <div class="row">
        <div class="col">
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                    if (empty($name)) {
                        echo "There Is No Record Please Enter Data";
                    }
                    else{
                        echo $name;
                    }
                    ?>
                </td>

                <td>
                    <?php
                    if (empty($email)) {
                        echo "There Is No Record Please Enter Data";
                    }
                    else{
                        echo $email;
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>