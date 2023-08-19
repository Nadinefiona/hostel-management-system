<?php
$host="localhost";
$username="root";
$password="";
$dbname="hostel";

$conn=mysqli_connect($host,$username,$password,$dbname);

$sql="SELECT* FROM student_login;";
$result=mysqli_query($conn,$sql);


echo '<table border=1>';
if(mysqli_num_rows($result)<1)
{
    echo 'NO RESULTS!';
}
else 
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row['regnumber']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['created_at']."</td>";
        echo "<td><a href='edit.php?q=".$row['regnumber'].">edit</a></td>";
        echo "<td><a href='delete.php?q=".$row['regnumber'].">Delete</a></td><tr>";
        
    }
}
echo '</table>';
?>