<?php
include("db_connect.php");

$uname=$_POST['nam'];
$pass=$_POST['pass'];


$sql = "SELECT * FROM adminn WHERE username='$uname' and passwords='$pass'";



$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  header("location:admindashboard.php");
}
else
{
 <i> $error ="your email or password is invalid";</i>
}


/*if (mysqli_num_rows($result) > 0) 
header('location:dashboard.php')
 else {
  echo "<h1>Invalid username or password</h1>";
}
*/
mysqli_close($conn);





?>