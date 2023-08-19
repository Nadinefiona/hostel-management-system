<?php
include('db_connect.php');
?>


<?php








$query="SELECT* FROM registration_form WHERE disabilit ='yes'";
$result=mysqli_query($conn,$query);
$registration_form=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<html>
  <head> <style>
    th{
      background-color:#00FFFF;
    }
table{
  position:absolute;
  top:10%

}

    body{
      background-color:#FAFAD2;
    }
    td {
  text-align: center;
}
tr:hover {background-color: pink;}
  table {
  border-collapse: collapse;
}</style></head>
<body>
<h1 style="text-align:center;">VIET HOSTEL</h1>
<table border="1" style="width:100%">
<tr>
 
<th>student_id</th>
<th>room number</th>
  <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>phone_number</th>
    <th>national identity number</th>
    <th>lever</th>
    <th>nationality</th>
    <th>sponsor</th>
    <th>college</th>
    <th>gender</th>
    <th>date of birth</th>
    <th>created_at</th>
    <th colspan=3>action</th>
    <th colspan=2>decision</th>
</tr>
</body>
</html>

<?php
foreach($registration_form as $value) 
{
?>

<tr>
       
      <td> <?php echo $value['student_id'];?></td>
      <td > <?php echo $value['room_id'];?></td>
       <td><?php  echo $value['first_name'];?></td>
       <td><?php echo $value['last_name']; ?></td>
       <td><?php  echo $value['email']; ?></td>
       <td><?php  echo $value['phone_number'];?></td>
       <td><?php echo $value['id_number']; ?></td>
       <td><?php  echo $value['lever'];?></td>
       <td><?php   echo $value['nationality']; ?></td>
       <td><?php echo $value['sponsor']; ?></td>
       <td><?php echo $value['college']; ?></td>
       <td><?php  echo $value['gender']  ;?></td>
       <td><?php   echo $value['DOB']; ?></td>
       <td><?php echo $value['date'] ; ?></td>

       <td><a href="vieteview.php?id=<?php echo $value['student_id'];?>"> view</a></td>
       <td><a href="vietedelete.php?id=<?php echo $value['student_id'];?>">delete</a></td>
       
       <td><a href="vieteup.php?id=<?php echo $value['student_id'];?>">update<a></td>

       <td><a href="vieteallow.php?id=<?php echo $value['student_id']; ?>&decision=allowed">Allowed</a></td>
					<td><a href="vieteallow.php?id=<?php echo $value['student_id']; ?>&decision=notallowed">Not allowed</a></td>
</tr>
<?php
}
?>
