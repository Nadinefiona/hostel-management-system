<?php
   include("db_connect.php");
   if(isset($_GET['id'])){
    $id = $_GET['id'];
   }
  else{
      $id="";
  }
   $query = "SELECT * FROM registration_form WHERE student_id=".$id;
   
   $result = mysqli_query ($conn, $query);
   if(!$result){
	   echo "Error ".mysqli_error($conn);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "student_id: ".$row['student_id']; echo "<br/>";
           echo "room_id: ".$row['room_id']; echo "<br/>";
		   echo "	firstname: ".$row['first_name']; echo "<br/>";
		   echo "	lastname: ".$row['last_name']; echo "<br/>";
		   echo "email: ".$row['email']; echo "<br/>";
	   }
   }
?>