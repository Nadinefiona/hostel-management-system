<?php
   include("db_connect.php");
   
   $query = "DELETE FROM registration_form WHERE student_id=".$_GET['id'];
   
   $result = mysqli_query($conn, $query);

   if(!$result){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:nyarutarama.php');
      exit();
   }
       
   
?>
