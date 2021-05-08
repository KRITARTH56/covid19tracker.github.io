<html>
<head>
<title>
CONTACT FORM
</title>
<style>
body
{
background-image:url('sonu sood.jpg');
}
h1
{
        text-align:center;
        font-size:56px;
         color:white;
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
          margin-left:2px;
         width:100%;
}
label
{     color:orange;
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
     height:150px;
}
#submit{
    border:2px black solid;
     font-size:20px;
     background-color:white;
}

#submit:hover{
          background-color:green;
        }
.menu {
        background-color:black;
        color:white;
        text-align:center;
        height:150px;
        font-size:30px;
        position:absolute;
         top:750px;
        width:100%;
        

}
.menu ul li
{
  width:200px;
    margin: 15px;
    padding:  5px;
    float:left;
}
.menu ul li
   {   text-decoration: none;
     color: white;
}

.fa{
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  align:center;
  position:relative;
  
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  margin-top:12px;
  background:#3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram{
  background: pink;
  color: white;

}
</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h1> CONTACT FORM</h1>
<div>
<form action="duploicate contact.php" method="post">
<label >FIRST NAME</label><br></br>
<input type="text" placeholder="YOUR FIRST NAME" name="fname" id="kname"  required/>
</div>

<div><label>LAST NAME</label><br></br>
<input type="text" placeholder="YOUR LAST NAME" name="lname"  id="rname" required/>
</div>

<div>
<label>CONTACT</label><br></br>
<input type="text" placeholder="YOUR MOBILE NUMBER" name="mname"  id="sname"  required/>
</div>
<div><label>comment</label><br></br>
<input type="text" placeholder="write your comment here" name="dname"  id="cname" required/>
</div>


<div>
<label></label><br></br>
<input type="submit" placeholder="SUBMIT" id="submit" name="submit"/>
</form>
</div>
<footer>
<div class="menu">
<ul>
<a href="https://www.facebook.com/ActorSonuSood/" class="fa fa-facebook"></a>
<a href="https://twitter.com/SonuSood" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/sonu_sood/" class="fa fa-instagram"></a>


</ul>
</div>
</footer>
</body>
</html>
