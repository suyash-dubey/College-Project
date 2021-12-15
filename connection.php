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
                     <li class="active"><a href="index.html">Home  </a></li>
                     <li><a href="faculty.html">Faculty  </a></li>
                     <li><a href="gallery.html">Gallery  </a></li>
                     <li><a href="about.html">About  </a></li>
                     <li><a href="contact.html">Contact  </a></li>
                </ul>
          </div>
          <div class="Title"  >
            <h1>GRAPHIC ERA PLACEMENT DEPARTMENT</h1>
          </div>
          <div class="button">
               <a href="studentsignin.html" class="btn">SIGN IN</a>
               <a href="studentregister.html"  class="btn">REGISTER</a>
          </div>
      </header>

</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="studentregister";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo" connection established";
}
else{
    echo" connection failed".mysqli_connect_error();
}
if(isset($_GET['submit'])){
    $fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$ffn=$_GET['fathername'];
$add=$_GET['address'];
$dob=$_GET['dob'];
$urn=$_GET['urollno'];
$pas=$_GET['chpassword'];
$resume=$_GET['upload'];
$highschool=$_GET['highschool'];
$intermediate=$_GET['intermediate'];
$cgpa=$_GET['cgpa'];
$query="insert into studentdetails values ('$fn','$ln','$ffn','$add','$dob','$urn','$pas','$resume','$highschool','$intermediate','$cgpa')";
$da=mysqli_query($conn,$query) or die(mysqli_error($conn));
if($da)
{
   
}
else
{
    echo "error while inserting";
}
}
?>