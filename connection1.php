<?php
include(connection.php);
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