<?php  
$conn =mysqli_connect('localhost','honore','','hostel');

if(!$conn){
    echo 'connection error: '.mysqli_conect_error();
}

?>