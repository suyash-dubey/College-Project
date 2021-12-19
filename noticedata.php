<?php
$servername="localhost";
$username="root";
$password="";
$dbname="notice";
$connnn=mysqli_connect($servername,$username,$password,$dbname);
$sql="select * from noticedata;";
$result=mysqli_query($connnn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck > 0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo $row['date']." ".$row['notice'] . "<br>";
  }
}
?>
