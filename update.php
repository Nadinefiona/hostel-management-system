<?php
   include("db_connect.php");
   $r = "SELECT * FROM regists WHERE student_id =".$_GET['id'];
   $dx = mysqli_query($conn,$r);
   if(!$dx){
	   echo "Failed";
   }
   if($row = mysqli_fetch_array($dx)){
	   echo "updating student data here";
	   ?>
	   <form action="" method="post">
		  <input type="hidden" name ="student_id" value="<?php echo $row['student_id'];?>"/>
		   <br/>
         <input type="text" name ="FNAME" value="<?php echo $row['firstname'];?>"/>
         <br/>
         <input type="text" name ="LNAME" value="<?php echo $row['lastname'];?>" />
		  <br/> 		  
			<input type="email" name ="eamil" value="<?php echo $row['email'];?>" />
            <br/> 		  
			
		  
			<input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   <?php  
	     if(isset($_POST['update']))
        {
             $student_id=$_POST['student_id'];
			 $FNAME= $_POST['FNAME'];
             $LNAME= $_POST['LNAME'];
             $email = $_POST['eamil'];
           
			  $w = "UPDATE regists SET firstname='$FNAME' , lastname='$LNAME', email='$email'
			 WHERE student_id='$student_id';";
             $r = mysqli_query($conn,$w);
			 if(!$w){
				 echo "error ";
			 }else{
				 echo "registration is succed";
			 }
			 
		 }
   }
?>