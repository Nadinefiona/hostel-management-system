<?php
include('db_connect.php');
if(isset($_GET['decision'])){
    $decision=$_GET['decision'];
$id=$_GET['id'];

if($decision=='allowed')
{
	$SQL="UPDATE registration_form SET decision='Allowed' WHERE student_id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('Student application Allowed')</script> ";
	
	header("Location:bengazi.php?id=$id");
	exit();
}
elseif ($decision=='notallowed')
{
	$SQL="UPDATE registration_form SET decision='not Allowed' WHERE student_id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('student not Allowed')</script> ";
}
}


 ?>