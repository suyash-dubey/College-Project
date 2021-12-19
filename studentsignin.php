


<!DOCTYPE html>
<html>
<head>
     <title>Sign In</title>
     <link rel="stylesheet" type="text/css" href="css/signin2.css">
</head>
<body>
      <header>
          <div class="main">
                <ul>
                     <li><a href="index.html">Home  </a></li>
                     <li><a href="faculty.html">Faculty  </a></li>
                     <li><a href="gallery.html">Gallery  </a></li>
                     <li><a href="about.html">About  </a></li>
                     <li><a href="contact.html">Contact  </a></li>
                </ul>
          </div>
          <form method="post">
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="user" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <input type="submit" class="login" value="LOGIN" name="submit">
            <input type="checkbox" checked="checked"> Remember me
            <button type="button1" class="cancelbtn"><a href="index.html"> Cancel</a></button>
        </div>
    </form>
      </header>

</body>
</html>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","studentregister");


if(isset($_REQUEST["submit"]));
{
    $user=$_REQUEST["user"];
    $pass=$_REQUEST["pass"];
    $sql="select * from studentdetails where univrollnumber='$user' && password='$pass'";
    $query=mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {

     header("Location: afterstudentsignin.html");
    }
    else{
        echo "USER NOT FOUND";

    }
}
?>
