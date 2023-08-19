<html>
<head>
  <style> 
 h2{


color:hotpink;

}

.kina{
  border-radius: 5px;
  background-color:

  lightsteelblue;
  padding: 20px 20px 20px 260px;
  
}
input[type=text ] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  
}
body{
  background:grey;
}
input[type=number] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  
}

input[type=date] {
  border: 2px solid  lightsteelblue;
  border-radius: 4px;
  width: 60%;
}
input[type=email] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  
}
  </style>
 
</head>
<body >
  
  <form action=" " method="post"> 
<div class="kina">
<h2>FILL THIS FORM FOR HOSTEL RESERVATION PLEASE!</h2><br>
  <div class="troph">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" required value="" ><br><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" required value=""><br><br>
  <lebel for="email" > e-mail :</lebel><br>
  <input type="email" id="email" name="email" required value=""><br><br>
  <lebel for="p number">Phone number:</lebel><br>
  <input type="number" id="p number" name="p_number" required value=""><br><br>
  <lebel for="lever">LEVEL:</lebel><br>
  <input type="number"  name="level"requiredvalue=""><br><br>
  <lebel for="id number">ID number:</lebel><br>
  <input type="number"  name="id_number"required value=""><br><br>
  <lebel for="nationality"> nationality:</lebel><br>
  <input type="text" id="nationality" name="nationality"required value=""><br><br>
  <label for="sponsor">sponsor:</label><br>
  <input type="text" id="sponsor"  name="sponsor"required value=""><br><br>
  <lebel for="disability">Do you have any disability:</lebel>
  <select name="disability" required>
  <option value="yes"> yes</option>
  <option value="no"> no</option>
  </select><br><br>
  <label for ="college">   <h4>COLLEGE</h4></label><br><br>
  <input type="radio" name="college" required value="College of Agriculture and Veterinary Medicine (CAVM)">
  <label for="cvm">College of Agriculture and Veterinary Medicine (CAVM)</label><br><br>
  <input type="radio"  name="college" required value="College of Arts and Social Sciences (CASS))">
  <label for="cass">College of Arts and Social Sciences (CASS))</label><br> <br>
   <input type="radio" name="college" required value="College of Business and Economics (CBE)">
   <label for="cbe">College of Business and Economics (CBE)</label><br> <br>
  <input type="radio" name="college" required  value="College of Education (CE)">
   <label for="ce">College of Education (CE)</label><br> <br>
   <input type="radio" name="college" required value="College of Medicine and Health Sciences (CMHS)">
   <label for="cmhs">College of Medicine and Health Sciences (CMHS)</label><br> <br>
   <input type="radio" name="college" required  value="College of Science and Technology (CST)">
   <label for="cvm">College of Science and Technology (CST)</label><br> <br>
   <label>   
        Gender :  
        </label><br>  
        <input type="radio" name="sex" required value="male"  > Male <br>  
        <input type="radio" name="sex" required value="female" > Female 
        <br>
    <label for="date"> <h4>date of  birth</h4>  </label>
    <input type="date" id="date" name="dateofbirth" required value="date " ><br/><br>
    </div>
 <div class="babe">
    <a href="submit.php" >
<input type="submit" name="sub"  id="sub" value="submit"></a><br>
    </div>
    <input type="submit" name ="ret" value="Retrieve"/>
  </div>
  </fieldset>
  </form>
  
  </table>
  <?php
include('db_connect.php');
 if(isset($_POST['sub'])){
   echo "submit is clicked!";
  echo "<br/>";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$phonenum=$_POST['p_number'];
$idnum=$_POST['id_number'];
$level=$_POST['level'];
$country=$_POST['nationality'];
$sponsor=$_POST['sponsor'];
$disability=$_POST['disability'];
$college=$_POST['college'];
$sex=$_POST['sex'];
$date=$_POST['dateofbirth'];

    $query= "INSERT INTO registration_form (first_name,last_name,email,phone_number,id_number,lever,nationality,sponsor,disabilit,college,gender,DOB)
VALUES ('$fname', '$lname', '$email','$phonenum','$idnum','$level','$country','$sponsor','$disability','$college','$sex','$date')";
  $result = mysqli_query($conn, $query);
if(!$result){
  echo "Not processed! ".mysqli_error($conn);
}else{
  echo "Registration is done!";
}}

if(isset($_POST['ret'])){
	   
  $retieve = "SELECT * FROM registration_form";
  $result = mysqli_query($conn, $retieve);
  if(!$result){
    echo "Something is wrong".mysqli_error($conn);
  }else{

  echo " <table border=1>
  
  <tr><th>first_name</th><th>last_name</th><th>email</th><th>hostelname</th><th>roomnumber</th><th>phone_number</th><th>id_number</th><th>lever</th><th>college</th><th>nationality</th><th>disabilit</th><th>sponsor</th><th>DOB</th>
  
  
  ";
  
     while($row = mysqli_fetch_array($result))
     {
     echo "<tr><td>". $row["first_name"]." </td><td> ".$row["last_name"]." </td><td>  ".$row["email"]." </td><td>  ".$row["hostelname"]." </td><td> ".$row["roomnumber"].  " </td><td> ".$row["phone_number"] ." </td><td>  ".$row["id_number"]."  </td><td> ".$row["lever"]." </td><td> ".$row["college"] ." </td><td>".$row["nationality"]."  </td><td>".$row["disabilit"]." </td><td> ".$row["sponsor"]." </td><td> ".$row["DOB"]."</td></tr>";
   }
 
  }
  
  
  
}

?>
</body>
</html>