
<!DOCTYPE html>
<html>
<head>
<style> 
input[type=button] {
  border-radius: 12px;
  background-color:aquamarine;
  padding: 10px 10px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 180px;
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
  padding: 18px 20px 20px 260px;
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

<p><i>HOSTEL DETAILS</i></p>
<div class="container">
<form method="post" action="hosteldetails.php">
    <div class="row">
      <div class="col-25">
  <label for="hostelname">HOSTEL_NAME:</label>
  </div>
      <div class="col-75">
  <input type="text" id="hostelname" name="hostelname">
  </div>
  <div class="row">
    <div class="col-25">
<label for="capacity">CAPACITY:</label>
</div>
    <div class="col-75">
<input type="text" id="capacity" name="capacity">
</div>
 
   
<div class="button">
  <button type="submit" name="submit" value="save">Save</button>
<a href="dashboard.php"><input type="button" value="back"> </a> 
</div>
</form>
</div>
</body>
</html>
<?php
include('db_connect.php');
?>
<?php
if(isset($_POST['submit']))
{
  if(!empty($_POST['hostelname']) && !empty($_POST['capacity']))
  {
    $name=$_POST['hostelname'];
    $capacity=$_POST['capacity'];
    $sql="INSERT INTO hostel(hostel_name,capacity)VALUES('$name','$capacity')";
    $result=mysqli_query($conn, $sql);
  }
}
?>
<table border="2">
  <tr>
    <th>#</th>
    <th>hostel name</th>
    <th>capacity</th>
    <th colspan="2">Action</th>
</tr>
<?php
$qry="SELECT * FROM hostel ";
if($result1=mysqli_query($conn, $qry))
{
  $i=1;
  while($row=mysqli_fetch_array($result1))
  {
?>
<tr>
<td><?php echo $i++; ?></td>
  <td><?php echo $row['hostel_name']; ?></td>
  <td><?php echo $row['capacity']; ?></td>
  <td><a href="edithostel.php?id=<?php echo $row['hostel_id']; ?>">Edit</a></td>
  <td><a href="deletehostel.php?id=<?php echo $row['hostel_id']; ?>">Delete</a></td>
  </tr>
  <?php }} ?>
  </table>