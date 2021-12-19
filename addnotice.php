<!DOCTYPE html>
<html>
<head>
     <title>ADD NOTICE</title>
     <link rel="stylesheet" type="text/css" href="css/styleabout.css">
     <style>

     </style>
</head>
<body>
      <header>
          <div class="main">

                <ul>
                     <li ><a href="index.html">Home  </a></li>
                     <li><a href="faculty.html">Faculty  </a></li>
                     <li><a href="gallery.html">Gallery  </a></li>
                     <li><a href="about.html">About  </a></li>
                     <li><a href="contact.html">Contact  </a></li>
                </ul>
          </div>
          <form method="get">
        <div class="container">
            <label>ENTER DATE : </label>
            <input type="date" placeholder="Enter date" name="date" required><br>
            <textarea rows="10" cols="20" name="noticee" required>add notice!</textarea><br>
            <input type="submit" value="SUBMIT" name="submit">
        </div>
    </form>
      </header>



</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="notice";
$connnn=mysqli_connect($servername,$username,$password,$dbname);
if($connnn)
{
    echo" connection established";
}
else{
    echo" connection failed".mysqli_connect_error();
}
if(isset($_GET['submit'])){
$fn=$_GET['date'];
$ln=$_GET['noticee'];
$query="insert into noticedata values ('$fn','$ln')";
$da=mysqli_query($connnn,$query) or die(mysqli_error($connnn));
if($da)
{

}
else
{
    echo "error while inserting";
}
}
?>
