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
        $body = "Hi  $fname. Click here too Activate your Account http://localhost/sonu%203/activate.php?token=$token ";
        $headers = 'From: kritarthsign2424@gmail.com' . "\r\n" .
           'MIME-version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset-utf-8';
        
    if (mail($mname, $subject, $body, $headers)) {
      

  
       echo "<script>alert('check your mail for verification of email');</script>";
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


<html>
<head>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
REGISTER
</title>
<style>
h1
{
        text-align:center;
        font-size:56px;
         color:black;
}
h3
{
      
       font-size:25px;
}
label{
         font-size:20px;
         color:black;
         margin-left:5px;
         position:relative;
         font-style:bold;
          
         }
form
{              
          margin-left:0px;
         width:100%;
}
label
{     color:black;
}
#kname
{
     width:100%;
     padding:10px;
      background-color:#D3D3D3;
}
#rname
{
     margin-bottom:15px;
     width:100%;
     padding:10px;
        background-color:#D3D3D3;
}
#sname
{
     margin-bottom:10px;
     width:100%;
     padding:10px;
     background-color:#D3D3D3
}
#cname
{
     margin-bottom:10px;
     width:100%;
     padding:10px;
     background-color:#D3D3D3;
}
#gname
{
     margin-bottom:10px;
     width:100%;
     padding:10px;
     background-color:#D3D3D3;
}
#submit{
    border:5px black solid;
    padding:20px;
    width:40%;
     
     background-color:white;
     font-size:20px;
     background:linear-gradient(57deg,#00c6a7,#1e4d92);
     color:white;
}

#submit:hover{
           background:linear-gradient(57deg,#1e4d92,#00c6a7);
        }

</style>


</head>
<body>
<h1> REGISTER</h1>
<div>
<form method="post">
<label >FIRST NAME</label><br></br>
<input type="text" placeholder="YOUR FIRST NAME" name="fname" id="kname"  required/>
</div>

<div><label>LAST NAME</label><br></br>
<input type="text" placeholder="YOUR LAST NAME" name="lname"  id="rname" required/>
</div>
<div><label>EMAIL</label><br></br>
<input type="text" placeholder="WRITE YOUR EMAIL" name="mname"  id="rname" required/>
</div>
<div><label>PASSWORD</label><br></br>
<input type="password" placeholder="CHOOSE YOUR PASSWORD" name="dname"  id="cname" required/>
</div>
<div><label>Confirm Password</label><br></br>
<input type="password" placeholder="CHOOSE YOUR CONFIRM PASSWORD" name="oname"  id="gname"/>
</div>

<div>
<label></label><br></br>
<input type="submit" placeholder="REGISTER" id="submit" name="submit"/>
</form>
</div>
<footer>
<h3>Already have an account?<a href="new login.php">Sign in</a></h3>
</footer>


</ul>
</div>
</footer>
</body>
</html>
