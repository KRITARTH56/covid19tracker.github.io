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
      echo"<script>alert('Please Check your Mail Inbox to verify you ');</script>";
}
echo"<script>alert('Check your Mail inbox to reset your password');</script> ";    

}else{ 
    echo"<script>alert('Email Sending Failed');</script> ";
          }
           }
            else{
            echo"<script>alert('No Email Found');</script> ";

 
}
 
?>
