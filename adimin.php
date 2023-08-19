<html>
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="adimin.css">

</head>
<body>
    <form action="adimin.php" method="POST">
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox"> 
            
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="nam"  placeholder="username" required>

        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="password" name="pass" required>

        </div>
         <div class="btn">
    <button type="submit" name="submit">Sign In</button>
    
        </form>
        
        
        </div>
    </div>

</body> 
</html>

<?php
include("db_connect.php");

if(isset($_POST['submit']))
{
    $uname=$_POST['nam'];
    $pass=$_POST['pass'];


$sql = "SELECT * FROM adminn WHERE adminname='$uname' and password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    echo 'jgjgj';
  header("location:admindashboard.php");
  exit();
}
else
{
  echo "your email or password is invalid";
}


/*if (mysqli_num_rows($result) > 0) 
header('location:dashboard.php')
 else {
  echo "<h1>Invalid username or password</h1>";
}
*/
mysqli_close($conn);

}
?>