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
    <h2> viete allowed student<h2>
<table>
<tr>
<th>student_id</th>
  <th>firstname</th>
    <th>lastname</th>
   
    <th>room number</th>
    <th>level</th>
   
<?php foreach($regists as $regist) : ?>
  <tr>

  <td><?php  echo $regist['student_id'];?></td>
    
       <td><?php  echo $regist['firstname'];?></td>
       <td><?php echo $regist['lastname']; ?></td>
       
       <td><?php   echo $regist['passwords']; ?></td>
       <td><?php echo $regist['level']  ;?></td>
      

      
  </tr>
<?php endforeach; ?>
</table>



</body>
</html>


