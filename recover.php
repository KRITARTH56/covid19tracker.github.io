<?php
SESSION_START();
include"connection.php";
if(isset($_POST['submit']))
{

      $newpass= mysqli_real_escape_string($con, $_POST['password']);
  $cnpassword= mysqli_real_escape_string($con, $_POST['cpassword']);

      $pass= password_hash($newpass,PASSWORD_BCRYPT);
      $cpass= password_hash($cnpassword,PASSWORD_BCRYPT);
 
     
                      if($newpass==$cnpassword){
          $updatequery = "update kite set password='$pass'";
         $iquery =mysqli_query($con,$updatequery);
         
          if($iquery){
          echo"<script>alert('Your Password have been Udated Successfully');</script>";
           }else{
              echo"<script>alert('Your Password and Confirm Password have been not matched Try once again');</script>";
             
             }
           }else{
         echo"<script>alert('Your Password and Confirm Password have been not matched Try once again');</script>";
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


<form action method="post">
  <div>
    <h1>SET YOUR PASSWORD</h1>
</div>

  

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
      <label for="password"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Confirm Password" name="cpassword" required>

    <button type="submit" name="submit">Submit</button>
   

</form>
<h3>Already have an account <a href="new login.php">Sign in</a></h3>
</body>
</html>