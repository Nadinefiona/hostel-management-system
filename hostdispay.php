<?php
include('db_connect.php');


$sqli = "SELECT * FROM registration_form";
$result = mysqli_query($conn,$sqli); 
$registration_form=mysqli_fetch_all($result,MYSQLI_ASSOC);



?>
<html>
    <head>
        <title>  </title>
        <style>

  body {
    background-color:Turquoise ;

  }        
table {
  font-family: arial, sans-serif;
  pse;
  width: 100%;
}

th, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 6px;
}

tr {
  background-color:white ;
}
</style>
</head>
<h1>hostel reservation </h1>
<body>
<table border="2">
<tr>
<th>student_id</th>
  <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>hostelname</th>
    <th>national identity number</th>
    <th>lever</th>
    <th>nationality</th>
    <th>sponsor</th>
    <th>disability</th>
    <th>college</th>
    <th>gender</th>
    <th>date of birth</th>
    <th>created_at</th>
    <th colspan=3>action</th>
    
</tr>
<?php foreach($registration_form as $value) : ?>
  <tr>

      <td> <?php echo$value['student_id'];?></td>
       <td><?php  echo$value['first_name'];?></td>
       <td><?php echo $value['last_name']; ?></td>
       <td><?php  echo $value['email']  ;?></td>
       <td><?php  echo$value['phone_number'];?></td>
       <td><?php echo $value['id_number']; ?></td>
       <td><?php  echo $value['lever']  ;?></td>
       <td><?php   echo $value['nationality']; ?></td>
       <td><?php echo $value['sponsor']  ;?></td>
       <td><?php  echo$value['disabilit'];?></td>
       <td><?php echo $value['college']; ?></td>
       <td><?php  echo $value['gender']  ;?></td>
       <td><?php   echo $value['DOB']; ?></td>
       <td><?php echo $value['date'] ; ?></td>

       <td><a href="regisview.php?id=<?php echo $value['regnumber'];?>"> view</a></td>
       <td><a href="regisdelete.php?id=<?php echo $value['regnumber'];?>">delete</a></td>
       <td><a href="update.php?id=<?php echo $value['regnumber'];?>">update<a></td>
    
  </tr>
<?php endforeach; ?>
</table>



</body>
</html>


