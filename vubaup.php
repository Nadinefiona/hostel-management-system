<?php
   include("db_connect.php");
 
   if(isset($_GET['id']))
   {
    $id=$_GET['id'];
   }
   else{
       $id="";
   }
   $r = "SELECT * FROM registration_form WHERE student_id =".$id;
   $dx = mysqli_query($conn,$r);
   
   if($row = mysqli_fetch_array($dx)){
	   echo "Student Data";
	   ?>
	   <form action="vubasub.php" method="post">
		  <input type="hidden" name ="student_id" value="<?php echo $row['student_id'];?>" placeholder="Enter the user_id"/>
          <input type="text" name ="room_id" value="<?php echo $row['room_id'];?>" placeholder="room id"/>
         <br/>
		   <br/>
         <input type="text" name ="fname" value="<?php echo $row['first_name'];?>" placeholder="Enter the first name"/>
         <br/>
         <input type="text" name ="lname" value="<?php echo $row['last_name'];?>" placeholder="Enter the lastname"/>
		  <br/> 		  
			<input type="email" name ="eamil" value="<?php echo $row['email'];?>" placeholder="Enter the account number"/>
            <br/> 		  
			
		  
			<input type="submit" name ="update" value="Update"/>
			
		</form> 
	  <?php
      
   }?>