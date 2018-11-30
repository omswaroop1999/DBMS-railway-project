<?php
$name = filter_input(INPUT_POST, 'name');
$subject = filter_input(INPUT_POST, 'subject');
$fed=filter_input(INPUT_POST, 'fed');
 
 
 if (!empty($name)){
if (!empty($subject)){

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
  $sql = "INSERT INTO feedback(name,subject,fed)
  values ('$name','$subject','$fed')";
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
  echo "name should not be empty";
  die();
}
 }
 ?>