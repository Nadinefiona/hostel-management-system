<?php 
$regnbr='';
$username='';
$error='';
if(isset($_POST['submit']))
{
    include('db_connect.php');
    $regnbr = $_POST['email'];
    $username = $_POST['password'];

    $sql="SELECT * FROM regists WHERE email = '$regnbr' and passwords='$username';";

    $result = mysqli_query($conn ,$sql);


    if(mysqli_num_rows($result) > 0){
            header("location:registrationform.php");
    }
        else
        {
            $error ="your email or password is invalid";
        }
     
    //   mysqli_free_result($result);

      mysqli_close($conn);


}




?>
<html>
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="user.css">
<style> 
 body
 {
     background: url(u.PNG)
 }
</style>
</head>
<body>
    <form action="user.php" method="POST">
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox"> 
          
            <input type="text" placeholder="enter your email" name="email">
        

        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder=" enter your password" name="password">

        </div>
        <p style="color:red;"><?php echo ($error)??""; ?></p>
        <div class="button">
        <button class="button" name="submit" >login</a></button>
    </div>
    </div>
    </form>
</body> 
</html>