
<!DOCTYPE html>
<html>
<head>
<style> 
input[type=button] {
  border-radius: 12px;
  background-color:rgb(127, 255, 206);
  padding: 10px 10px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 0px;
  right: 28px;
  width: 200px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: px;
}

p {
text-align:center;

color:hotpink;

}

.container {
  border-radius: 5px;
  background-color:
   rgb(9, 83, 83);
  padding: 18px 20px 20px 260px;
}
input[type=text] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=email] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=number] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #33FFBD;
  border-radius: 10px;
}
input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  
  border: 2px solid #33FFBD;
  border-radius: 10px;
}


</style>
</head>
<body>

<p><i>ROOM DETAILS</i></p>
<div class="container">
<form method="" action="">
<div class="row">
      <div class="col-25">
  <label for="roomid">ROOM_ID</label>
  </div>
      <div class="col-75">
  <input type="number" id="roomide" name="roomid" >
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="hostelid">HOSTEL_ID:</label>
  </div>
      <div class="col-75">
  <input type="number" id="hostelid" name="hostelid">
  </div>
  <div class="row">
    <div class="col-25">
<label for="type">ROOM_TYPE:</label>
</div>
    <div class="col-75">
<input type="text" id="type" name="type">
</div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="price"> ROOM_PRICE:</label>
  </div>
      <div class="col-75">
  <input type="number" id="price" name="price" >
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="seater">NUMBER_OF_SEATER:</label>
  </div>
      <div class="col-75">
  <input type="number" id="seater" name="seater">
  </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="staying">STAYING_TIME:</label>
  </div>
      <div class="col-75">
  <input type="number" id="staying" name="staying">
  </div>
    </div>
<div class="button">
    <a href="admindashboard.php"><input type="button" value="back"> </a> 
</div>
</form>
</div>
</body>
</html>