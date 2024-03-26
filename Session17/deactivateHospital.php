<?php
include("conc.php");
$updateStatus = "UPDATE hospital_tbl SET status = 'deactive' WHERE id=$_GET[id]";
mysqli_query($connection, $updateStatus);
echo "<script>window.location.href='hospital.php'</script>";
