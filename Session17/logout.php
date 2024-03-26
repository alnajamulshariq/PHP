<?php
session_start();
session_destroy();
echo"<script>alert('You Are Log Out')</script>";
echo"<script>window.location.href='login.php'</script>";
?>