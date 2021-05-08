<?php
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$dname = $_POST['dname'];


}
         $con=mysqli_connect('localhost:3308','root');
         mysqli_select_db($con,'fname');
         $q="insert into book(firstname,lastname,mobile,comment) values('$fname','$lname',$mname,'$dname ')";
         $status=mysqli_query($con,$q);
        mysqli_close($con);
?>
<html>
<head>
<title>
CONTACT FORM</title>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body
{
    background-image:url("sonu sood.jpg");
}
h1
{   
    text-align:center;
    color:white;
    
}
.sing
{
     margin-top:400px;
    margin-left:100px;
    color:white;
   
}
.sing:hover{
    color:green;
}


</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
<p>
<?php
if($status==1)
echo"<script>alert('Your Data is Submitted Successfully');</script>";

else

echo"<script>alert('Check Your Mobile No ');</script>";
?>
</p>
<h1>FOR GOING TO BACK PAGE <h1><br></br>

<a href="index.php" class="sing">click here</a>
</body>
</html>