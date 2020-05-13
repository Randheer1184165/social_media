<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
$_SESSION['msg']="succesfully logout";
header("location:login.php");
?>