<?php
SESSION_START();
ob_start(); 
include"connection.php";
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$t="SELECT * FROM kite WHERE email='$email'";
$result=mysqli_query($con,$t);
$to=mysqli_num_rows($result);
if($to)
{
     $email_pass = mysqli_fetch_assoc($result);
      $db_pass = $email_pass['password'];
    $_SESSION['email']=$email_pass['email'];
     $pass= password_verify($password,$db_pass);
if($pass){
       if(isset($_POST['remember'])){
       setcookie('emailcookie',$email,time()+86400);
        setcookie('passwordcookie',$password,time()+86400);
          header('location:http://localhost/sonu 3/corona.php');
    }else{
    header('location:http://localhost/sonu 3/corona.php');
}
   
}
else
{
     echo"<script>alert('your email is not valid');</script>";
   
     
}
}else{
      echo"<script>alert('your email is not valid');</script>";

   
     

}
}
?>