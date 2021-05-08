<?php
session_start();
include"connection.php";
if(isset($_GET['token'])){
$token=$_GET['token'];
$updatequery=" update kite set status='active' where token='$token'";
$query=mysqli_query($con,$updatequery);
if($query)
{
echo"<script>alert('account updated successfully');</script>";
header('location:new login.php');
}
else{
  echo"<script>alert('account not updated');</script>";
}
}
?>