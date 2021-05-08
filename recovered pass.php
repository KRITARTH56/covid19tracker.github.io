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
              header             ('location:http://localhost/sonu 3/forget.php');
            
          
}
 

}
 
?>
