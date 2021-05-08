<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/sonu 3/new login.php');
else
header('location:http://localhost/sonu 3/corona.php');
?>

