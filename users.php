



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
body {
    background-color: #00405d;
    font-family: 'Roboto', sans-serif;
}
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border-radius: 15px;
    border: 1px solid #888;
    width: 70%; /* Could be more or less, depending on screen size */
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
    color: #fff;
}
</style>
</head>
<body>
    <h2>insert into user table</h2>
   <form class="modal-content animate" method="post" action="users.php">
    

    <div class="container">
      <label for="email"><b>email id</b></label>
      <input type="text" placeholder="Enter email id" name="email" required>

      <label for="uid"><b>user id</b></label>
      <input type="text" placeholder="Enter user id" name="uid" required>

      <label for="passwd"><b>password</b></label>
      <input type="password" placeholder="Enter password" name="passwd" required>

            <label for="age"><b>age</b></label>
      <input type="text" placeholder="Enter age" name="age" required>

      <label for="gender"><b> gender</b></label>
      <input type="text" placeholder="Enter gender " name="gender" required>

      <label for="phno"><b>phone no</b></label>
      <input type="text" placeholder="Enter phone number" name="phno" required>

      <label for="city"><b>city name</b></label>
      <input type="text" placeholder="Enter city" name="city" required>
      
      <label for="state"><b>state name</b></label>
      <input type="text" placeholder="Enter state " name="state" required>

      <label for="sque"><b>security question</b></label>
      <input type="text" placeholder="Enter security question" name="sque" required>

      <label for="sans"><b>security answer</b></label>
      <input type="text" placeholder="Enter security answer" name="sans" required>
      
        
      <button type="submit">submit</button>
      <a href="scroll.php" class="btn" role="button" style="text-align: center;">home</a>
      
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
$email = filter_input(INPUT_POST, 'email');
 $uid = filter_input(INPUT_POST, 'uid');
 $passwd = filter_input(INPUT_POST, 'passwd');
 $age = filter_input(INPUT_POST, 'age');
 $gender = filter_input(INPUT_POST, 'gender');
 $phno = filter_input(INPUT_POST, 'phno');
 $city = filter_input(INPUT_POST, 'city');
 $state = filter_input(INPUT_POST, 'state');
 $sque = filter_input(INPUT_POST, 'sque');
 $sans = filter_input(INPUT_POST, 'sans');
 
 if (!empty($email)){
if (!empty($uid)){

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
  $sql = "INSERT INTO users (email,uid,passwd,age,gender,phno,city,state,sque,sans)
  values ('$email','$uid','$passwd','$age','$gender','$phno','$city','$state','$sque','$sans')";
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
  echo "email should not be empty";
  die();
}
 }
 else{
  echo "uid should not be empty";
  die();
 }
 ?>