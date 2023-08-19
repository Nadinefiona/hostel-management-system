<?php
   include("db_connect.php");
   $id = $_GET['id'];
   $query = "SELECT * FROM regists WHERE student_id=".$id;
   
   $result = mysqli_query ($conn, $query);
   if(!$result){
	   echo "Error ".mysqli_error($connection);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "student_id: ".$row['student_id']; echo "<br/>";
		   echo "	firstname: ".$row['firstname']; echo "<br/>";
		   echo "lastname: ".$row['lastname']; echo "<br/>";
	   }
   }
?>