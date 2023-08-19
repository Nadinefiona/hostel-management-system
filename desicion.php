<?php
include('db_connect.php');

$decision=$_GET['decision'];

$id=$_GET['student_id'];

if($decision=='adimitted')
{
	$SQL="UPDATE registration_form SET decision='adimitted' WHERE student_id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('Student application adimited')</script> ";
	
	header("Location:hostel.php?id=$id");
	exit();
}
elseif ($decision=='denied')
{
	$SQL="UPDATE applied SET decision='denied' WHERE student_id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('student denied')</script> ";
}

 ?>