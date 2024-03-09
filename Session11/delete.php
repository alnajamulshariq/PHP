<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include('conn.php');

    $id = $_GET['id'];
    $deleteRow = "DELETE FROM emp_tbl WHERE id=$id";
    $showDeletedTable = mysqli_query($connection, $deleteRow);

    ?>

    <script>
        alert("Data Successfully Deleted")
        window.location.href = 'showResult.php';
    </script>
</body>

</html>