<?php
include('db_connect.php');


$sqli = "SELECT * FROM regists";
$result = mysqli_query($conn,$sqli); 
$regists=mysqli_fetch_all($result,MYSQLI_ASSOC);



?>
<html>
    <head>
        <title>  </title>
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
<tr>
<th>student_id</th>
  <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>passwords</th>
    <th>level</th>
    <th>created_at</th>
    <th colspan=3>action</th>
</tr>
<?php foreach($regists as $regist) : ?>
  <tr>

  <td><?php  echo $regist['student_id'];?></td>
    
       <td><?php  echo $regist['firstname'];?></td>
       <td><?php echo $regist['lastname']; ?></td>
       <td><?php  echo $regist['email']  ;?></td>
       <td><?php   echo $regist['passwords']; ?></td>
       <td><?php echo $regist['level']  ;?></td>
       <td><?php echo $regist['created_at'] ; ?></td>

       <td><a href="regisview.php?id=<?php echo $regist['student_id'];?>"> view</a></td>
       <td><a href="regisdelete.php?id=<?php echo $regist['student_id'];?>">delete</a></td>
       
       <td><a href="update.php?id=<?php echo $regist['student_id'];?>">update<a></td>
  </tr>
<?php endforeach; ?>
</table>



</body>
</html>


