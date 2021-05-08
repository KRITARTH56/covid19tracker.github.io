<?php
session_start();
include"connection.php";
if(!isset($_SESSION['email']))
header('location:http://localhost/sonu 3/new login.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
 
.main_header{
	height:450px;
	width:100%;
}
.rightside h1{
	font-size:3rem;
}
.co img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% {transform:rotate(0);}
		100% {transform:rotate(360deg);}
}
h3
{
      
       font-size:25px;
}
label{
         font-size:20px;
         color:black;
         margin-left:5px;
         padding-bottom:5px;
         font-style:bold;
         padding:5px;
          
         }
form
{              
          margin-left:5px;
         width:100%;
}
label
{     color:black;
    
     bottom:20px;
   
}
#kname
{
     
     width:100%;
     padding:10px;
      background-color:#D3D3D3;
      margin-right:5px;
    
}
#rname
{
      margin-left:5px;
     width:100%;
     padding:10px;
        background-color:#D3D3D3;
       
       margin-right:5px;
 }
#sname
{
    margin-left:5px;
      
     width:100%;
     padding:10px;
     background-color:#D3D3D3
      margin-right:5px;
}
#cname
{
     margin-right:5px;
      margin-left:5px;
     
     width:100%;
     padding:10px;
     background-color:#D3D3D3;
     height:125PX;
}
#submit{
    margin-bottom:10px; 
    margin-left:5px;
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
<body onload="fetch()">
  <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand pl-2" style="font-size:30px;" href="#">COVID-19</a>
  <a class="navbar-brand" href="logout.php" style="border-box:1px solid black;padding:2px;
color:white; background:linear-gradient(57deg,#1e4d92,#00c6a7);border-radius:5px;"> More Content</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" ></span>
  </button>

 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"> More Content</a>
      </li>
      <a class="navbar-brand" href="logout.php" style="border-box:1px solid black;padding:2px;
color:white; background:linear-gradient(57deg,#1e4d92,#00c6a7);border-radius:5px;"> log out</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      
      
    </ul>
    
  </div>
</nav>

<div class="main-header">
	<div class="row w-100 h-100">
     <div class="col-md-5 col-sm-5 col-12 order-lg-1 order-2">
     	<div class="leftside w-100 h-100 justify-content-center align-items-center v-flex">
         <img src="virus.jpg" width="350" height="300">
     	</div>
     </div>
     <div class="col-md-7 col-sm-7 col-12 order-lg-2 order-1">
     	<div class="rightside w-100 h-100 justify-content-center align-items-center d-flex">
         <h1> Lets Stay Safe & Fight Together Against Cor<span class="co"><img src="corona.png"></span>na Virus</h1>
     	</div>
     </div>
	</div>
	</div>
<section class="container">
 <form class="form-inline my-2 my-lg-0">
       <div id="got"><input class="form-control ml-sm-1 mt-3" type="search" placeholder="Search" id="search" aria-label="Search" class="form-control" style="width:70%; border:2px solid green;"/>
       <ul class="list-group " style=" border:1px solid black;overflow:scroll;height:75px;" id="result"></ul>
     </div>
    </form>

<div class="table" >
<table class="table-bordered table-striped text-center mt-2 mr-1 " style="width:100px;"  id="tbval" style="border:2px solid green;">
    <tr>
      <th>Country
      </th>
      <th>TotalConfirmed
      </th>
      <th>TotalRecovered
      </th>
      <th>TotalDeaths
      </th>
      <th>NewConfirmed
      </th>
      <th>NewRecovered
      </th>
      <th>NewDeaths
      </th>
    </tr>
  </table>
</div>
</section>
<script>
  function fetch(){
    $.get("https://api.covid19api.com/summary",

      function(data){
        /*console.log(data['Countries'].length);
      }
      )
    }*/
              var tbval= document.getElementById('tbval')

              for(var i=1; i<(data['Countries'].length);i++){
                var x=tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='#7a4a91';
                  tbval.rows[i].cells[0].style.color='#fff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background='#4bb7d8';
                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background='#4bb7d8';
                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background='#f36e23';
                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#4bb7d8';
                  
                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#9cc850';
                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background='#f36e23 ';
                  


              
              }
      });
  }

  
  $(document).ready(function(){
    $.ajaxSetup({cache:false});
    $('#search').keyup(function(){
      $('#got').animate({scrollTop:1000000},800);
      $('#result').html('');
      var searchField = $('#search').val();
      var expression = new RegExp(searchField,"i");
      $.getJSON('live search corona.json',function(data){
        $.each(data,function(key,value){
          if(value.Country.search(expression) != -1 || value.CountryCode.search(expression) != -1)
          {
            $('#result').append('<table class="table-bordered width=100% table-striped text-center mt-2 mr-1 " id="tbval" style="border:2px solid green;"><tr class="dflex bg-warning"><th style="width:30%; background-color:#7a4a91;"> '+value.Country+' </th> <th style="width:10%; background-color:#4bb7d8;">'+value.TotalConfirmed+'</th> <th style="width:10%; background-color:#f36e23;">'+value.TotalRecovered+'</th> <th style="width:10%; background-color:#9cc850;">'+value.TotalDeaths+'</th> <th style="width:10%; background-color:#f36e23 ;">'+value.NewConfirmed+'</th> <th style="width:10%; background-color:#9cc850;">'+value.NewRecovered+'</th> <th style="width:10%; background-color:#9cc850;">'+value.NewDeaths+'</th></tr></table>');
          }
        });
    });
  });
  });

  </script>
</body>
</html>
<?php include 'virus.php';?>
</section>
<section class="main_heading my-5">
    <div class="text-center">
        <h1>ABOUT COVID-19</h1> 
         <hr class="w-25"/>
     </div>
<div class="container">
 <div class="row my-5" >
   <div class="col-lg-6 col-md-6 col-12">
    <figure>
     <img src="corona.png" alt="about images" class="img-fluid about_img">
</figure>
</div>
<div class="col-lg-6 col-md-6 col-12">

<p>Coronaviruses are a large family of viruses that are actually common throughout the world and can cause respiratory illness in people and animals. There are several known coronaviruses that infect people and usually only cause mild respiratory disease, such as the common cold. However, at least two previously identified coronaviruses have caused severe illness — Severe Acute Respiratory Syndrome (SARS) coronavirus and Middle East Respiratory Syndrome (MERS) coronavirus</p>
<button type="button" class="btn btn-info"><a href="https://intermountainhealthcare.org/blogs/topics/live-well/2020/01/what-is-coronavirus-(covid-19)-and-how-can-i-prepare,-q-,/#corona" style="color:white;">More</a></button> 
</div>
</div>
</div>

    <section class="main_heading my-5">
    <div class="text-center">
        <h1>Contact Us</h1> 
         <hr class="w-25 mx-auto"/>
     </div>
<div class="container">
 <div class="row gy-5 ">
    <div class="col-md-4 col-10 col-xxl-4 mx-auto">
</section>

<div>
<form action="double.php" method="post">
<label >FIRST NAME</label><br></br>
<input type="text" placeholder="YOUR FIRST NAME" name="fname" id="kname"  required/>
</div>

<div><label>LAST NAME</label><br></br>
<input type="text" placeholder="YOUR LAST NAME" name="lname"  id="rname" required/>
</div>
<div><label>Mobile No</label><br></br>
<input type="text" placeholder="WRITE YOUR PHONE NUMBER" name="mname"  id="rname" required/>
</div>
<div><label>Comment</label><br></br>
<input type="text" placeholder="WRITE YOUR COMMENT" name="dname"  id="cname" required/>
</div>


<div>
<label></label><br>
<input type="submit" placeholder="REGISTER" id="submit" name="submit"/>
</form>
</div>
</div>
<footer class="bg-success h-5">
  @copyright
</footer>
</body>
</html>