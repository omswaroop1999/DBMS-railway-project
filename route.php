



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>insert stations</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border-radius: 15px;
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
 h2{
    text-align: center;
    text-transform: uppercase;
    color: green;
}
</style>
</head>
<body>
    <h2>insert into route table</h2>
   <form class="modal-content animate" method="post" action="route.php">
    

    <div class="container">
      <label for="trainid"><b>train id</b></label>
      <input type="text" placeholder="Enter train id" name="trainid" required>

      <label for="stopno"><b>stop number</b></label>
      <input type="text" placeholder="Enter stop no" name="stopno" required>

            <label for="stid"><b>station id</b></label>
      <input type="text" placeholder="Enter station id" name="stid" required>

      <label for="atime"><b>arrival time</b></label>
      <input type="text" placeholder="Enter arrival time" name="atime" required>

      <label for="dtime"><b>depature time</b></label>
      <input type="text" placeholder="Enter depature time" name="dtime" required>
      
      
        
      <button type="submit">submit</button>
      <a href="scroll.php" class="btn1" role="button" style="text-align: center;">home</a>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>














<?php
$trainid = filter_input(INPUT_POST, 'trainid');
 $stopno = filter_input(INPUT_POST, 'stopno');
 $stid = filter_input(INPUT_POST, 'stid');
 $atime = filter_input(INPUT_POST, 'atime');
 $dtime = filter_input(INPUT_POST, 'dtime');
 if (!empty($trainid)){
if (!empty($stopno)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "railway";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO route (trainid,stopno,stid,atime,dtime)
  values ('$trainid','$stopno','$stid','$atime','$dtime')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "trainid should not be empty";
  die();
}
 }
 else{
  echo "stopno should not be empty";
  die();
 }
 ?>