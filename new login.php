<?php
SESSION_START();
ob_start(); 
include"connection.php";
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$t="SELECT * FROM kite WHERE email='$email' and status='active'";
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
     echo"<script>alert('Your entered Password is wrong try again');</script>";
   
     
}
}else{
      echo"<script>alert('your email is not valid');</script>";

   
     

}
}
?>

<html>
<head>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<style>
h1
{
      text-align:center;
      font-size:50px;
      font-weight:bold;
 }
h3
{
       
      font-size:30px;
      font-weight:bold;
}
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>


<form method="post">
  <div>
    <h1>SIGN IN</h1>
</div>


  <div class="container">
    <label for="email"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  
    
    <span class="psw">Forgot <a href="forget.php">password?</a></span>
  </div>

</form>
<h3>Dont have an Account?<a href="sign up form.php">Register Now</a></h3>
</body>
</html>