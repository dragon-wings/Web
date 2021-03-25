<?php
session_start();
unset($_SESSION['user']);
echo "<script>alert('logout')</script>";
echo "<script>location.href='../src/nav.php';</script>";
?>