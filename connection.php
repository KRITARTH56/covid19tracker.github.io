<?php
$server = 'localhost:3308';
$user = 'root';
$password = '';
$db = 'sign';
$con = mysqli_connect($server,$user,$password,$db);
if($con){
   echo"";
}else{
       echo"connection not successfull";
}
?>  
