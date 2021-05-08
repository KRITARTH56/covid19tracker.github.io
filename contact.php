<?php
SESSION_START();
include"connection.php";
if(isset($_POST['submit']))
{
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname =  mysqli_real_escape_string($con,$_POST['lname']);
$mname =  mysqli_real_escape_string($con,$_POST['mname']);
$dname =  mysqli_real_escape_string($con,$_POST['dname']);
$oname =  mysqli_real_escape_string($con,$_POST['oname']);
      $pass= password_hash($dname, PASSWORD_BCRYPT);
      $cpass= password_hash($oname, PASSWORD_BCRYPT);

       $token= bin2hex(random_bytes(15));
      $emailquery="select * from kite where email='$mname'";
     $query=mysqli_query($con,$emailquery);
     $emailcount= mysqli_num_rows($query);
          if($emailcount>0)
            {echo"<script>alert('Email Already Exist');</script>";
             }else{
                      if($dname==$oname){
         $q="insert into kite(firstname,lastname,email,password,confirm_password,token,status) values('$fname','$lname','$mname','$pass','$cpass','$token','inactive')";
         $status=mysqli_query($con,$q);
          if($status){
         $subject = "Email activation";
        $body = "Hi  $fname. Click here too Activate your Account http://localhost/sonu%203/new%20login.php?token=$token ";
        $headers = 'From: kritarthsign2424@gmail.com' . "\r\n" .
           'MIME-version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset-utf-8';
        
    if (mail($mname, $subject, $body, $headers)) {
      if(isset($_SESSION['msg'])){
        $_SESSION['msg']= "account is activated";
}
    
    
     header('location:new login.php');
}else{ 
    echo "<script>alert('Email Sending Failed');</script>";
}



           }else{
             ?>
            <script>
           alert("Not Inserted");
           </script>
             <?php
           }
           }else{
        
        echo"<script>alert('Try agian your Password and Confirm Password is not matched');</script>";
         
             }
     }
}
 
?>
