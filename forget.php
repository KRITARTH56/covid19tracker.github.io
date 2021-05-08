<?php
SESSION_START();
include"connection.php";
if(isset($_POST['submit']))
{
$email =  mysqli_real_escape_string($con,$_POST['email']);
     
      $emailquery="select * from kite where email='$email'";
     $query=mysqli_query($con,$emailquery);
     $emailcount= mysqli_num_rows($query);
          if($emailcount){
           $userdata= mysqli_fetch_array($query); 
           $firstname= $userdata['email'];
           $token= $userdata['token'];
         $subject = "Password Reset";
        $body = "Hi,$email. click here too reset your password  http://localhost/sonu%203/recover.php?token=$token ";
        $headers = 'From: kritarthsign2424@gmail.com' . "\r\n" .
           'MIME-version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset-utf-8';
        
    if (mail($email, $subject, $body, $headers)) {
      
echo"<script>alert('Check your Mail inbox to reset your password');</script> ";    
}
else{"<script>alert('Check your internet connection');</script> ";

}
}else{ 
    echo"<script>alert('Email does not exist check it once again');</script> ";
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
    <h1>RECOVER ACCOUNT</h1>
</div>

  <div class="container">
    <label for="email"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <button type="submit" name="submit">Submit</button>

  </div>


</form>
<h3>Already hv an account <a href="new login.php">Sign in</a></h3>
</body>
</html>