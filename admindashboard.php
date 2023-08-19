<!DOCTYPE html>
<html>
<head>
<style>
  body{
    background-image: url(dashb.png);
  }
 .header {
  overflow: hidden;
  background-color:#2F4F4F;
  padding: 2px 10px 5px;
  width: 100%;
}
   

.log{
position: absolute;
top: 3%;
right: 2%;

}
.button{
    
    background-color:#00CED1; /* Green */
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
     border-radius: 50%;
     transition: all 0.5s;
     
     cursor: pointer;
  }
  .button:hover{

    color:hotpink;
  }
  
    .button:hover span {
      padding-right: 25px;
    }
   
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 400px;

  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 12px 25px 35px;
  text-decoration: none;
}

li a.active {
  background-color: #F08080;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;}

footer {
  text-align: center;
  padding: 3px 1px 109px;
  margin-right:70%;
  background-color:#2F4F4F;
  color: white;}
</style>
</head>
<body>
    <div class="header">
      <img src="logo.PNG" alt="Snow" style="width:6.5%">
      <P style="text-align: center;">ADMIN DASHBORD</P>
      <div class="log">
            <button class="button button1"> LOGOUT</button><br><br>  
            </div>      
        </div>
<ul>
  <li><a class="active" href="#home">HOME</a></li>
  <li><a href="#news">MY PROFILE</a></li>
  <li><a href="hosteldetails.php">HOSTEL DETAILS</a></li>
  <li><a href="hostlmanagement.html">HOSTEL MANAGEMENT</a></li>
  <li><a href="roomdetails.php">ROOM DETAILS</a></li>
  <li><a href="">MESSAGES</a></li>
  <li><a href="hostdispay.php">APPLICANTS</a></li>
  <li><a href="displayacces.php">ACCESS LOGIN</a></li>
</ul>
<div style="margin-left:29%; position:absolute; top:20.5%;">
  <div class="man">
  <p  ><img src="dash.png"></p>
  </div>
  </div>
<footer>
<p</p>
  </footer>
</body>
</html>
