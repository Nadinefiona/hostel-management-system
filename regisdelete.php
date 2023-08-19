<?php
   include("db_connect.php");
   
   $query = "DELETE FROM regists WHERE student_id=".$_GET['id'];
   
   $result = mysqli_query($conn, $query);

   if(!$result){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:displayacces.php');
      exit();
   }
       
   
?>
