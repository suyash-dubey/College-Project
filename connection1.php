<!DOCTYPE html>
<html>
<head>
     <title>GRAPHIC ERA PLACEMENT DEPARTMENT</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
      <header>
          <div class="main">
            <div class="LOGO">
                <IMG SRC="logo.jpg" height=80 width=400>
            </div>

                <ul>
                     <li><a href="index.html">Home  </a></li>
                     <li class="active"> <a href="index.html">Faculty  </a></li>
                     <li><a href="gallery.html">Gallery  </a></li>
                     <li><a href="about.html">About  </a></li>
                     <li><a href="contact.html">Contact  </a></li>
                </ul>
          </div>
          <div class="Title"  >
            <h1>GRAPHIC ERA PLACEMENT DEPARTMENT</h1>
          </div>
          <div class="button">
               <a href="facultysignin.html" class="btn">SIGN IN AS FACULTY</a>
               <a href="facultyregister.html"  class="btn">REGISTER</a>
          </div>
      </header>

</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="facultyregister";
$connn=mysqli_connect($servername,$username,$password,$dbname);
if($connn)
{
    echo" connection established";
}
else{
    echo" connection failed".mysqli_connect_error();
}
if(isset($_GET['submit'])){
    $fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$add=$_GET['address'];
$urn=$_GET['urollno'];
$pas=$_GET['chpassword'];
$query="insert into facultydetails values ('$fn','$ln','$add','$urn','$pas')";
$da=mysqli_query($connn,$query) or die(mysqli_error($connn));
if($da)
{

}
else
{
    echo "error while inserting";
}
}
?>
