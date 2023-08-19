
<?php
include('db_connect.php');
?>



<?php  
	     if(isset($_POST['update']))
        {
             $student_id=$_POST['student_id'];
             $room_id= $_POST['room_id'];
			 $FNAME= $_POST['fname'];
             $LNAME= $_POST['lname'];
             $email = $_POST['eamil'];
           
			  $w = "UPDATE registration_form  SET room_id='$room_id', first_name='$FNAME' , last_name='$LNAME', email='$email'
			 WHERE student_id='$student_id';";
             mysqli_query($conn,$w);
			 if(!$w){
				 echo "error ";
			 }else{
				header("location:miseleore.php");
                exit();
			 }
			 
		 }
   
?>