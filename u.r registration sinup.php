<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$level=$_POST['level'];

$sql="INSERT INTO regists (firstname,lastname,email,level,passwords) value ('$fname','$lname','$email','$level','$pwd')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "you have registed";
}
else
{
echo "query erros";
}

}
?>



<!DOCTYPE html>
<html>
<head>
<style> 
.button {
  border-radius: 12px;
  background-color:aquamarine;
  padding: 16px 20px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 200px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: px;
}

p {
text-align:center;

color:hotpink;

}

.container {
  border-radius: 5px;
  background-color:

  lightsteelblue;
  padding: 20px 20px 20px 260px;
}
input[type=text] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=email] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=number] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  
  border: 2px solid #33FFBD;
  border-radius: 10px;
}


</style>
</head>
<body>

<p><i>FILL FORM PLEASE  TO REGISTER IN UR  PLEASE!</i></p>
<div class="container">
<form method="POST" action="u.r registration sinup.php">
<div class="row">
      <div class="col-25">
  <label for="fname">First Name:</label>
  </div>
      <div class="col-75">
  <input type="text" id="fname" name="fname" required>
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="lname">Last Name:</label>
  </div>
      <div class="col-75">
  <input type="text" id="lname" name="lname"required>
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="email">email:</label>
  </div>
      <div class="col-75">
  <input type="email" id="lname" name="email" >
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="pwd">password:</label>
  </div>
      <div class="col-75">
  <input type="password" id="pwd" name="pwd" required>
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="level">leverl:</label>
  </div>
      <div class="col-75">
  <input type="number" id="leverl" name="level" required>
  </div>
    </div>
<div class="button">
  <button  name="submit">register</button>
</div>
</form>
</div>
</body>
</html>