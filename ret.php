<!DOCTYPE html>
<html>
<head>
	<title>
		station tables
	</title>
	<style >
#ctstyle
 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    
}

#ctstyle td, #ctstyle th {
    border: 1px solid #8e8e8e;
    padding: 8px;
}

#ctstyle tr:nth-child(even){background-color: #f2f2f2;}

#ctstyle tr:hover {background-color: #ddd;}

#ctstyle th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #7575a3;
    color: white;
}		
	</style>
</head>
<body>
	<h2>stations table</h2>
<table id="ctstyle">
	<tr>
		<th>station id's</th>
		<th>station name's</th>
	</tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stid, stname FROM stations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["stid"]."</td>
        <td>" . $row["stname"]. "</td>

        </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</table>


<h2>train table</h2>
<table id="ctstyle">
    <tr>
        <th>train id's</th>
        <th>train name's</th>
        <th>train type</th>
        <th>source id's</th>
        <th>destination id's</th>
        <th>total seats</th>
        <th>ticket cost</th>
        <th>availble dates</th>
        
    </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT trainid,tname,ttype,sourceid,destid,seats,fare,availdate FROM train";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["trainid"]."</td>
        <td>" . $row["tname"]. "</td>
        <td>" . $row["ttype"]."</td>
        <td>" . $row["sourceid"]. "</td>
        <td>" . $row["destid"]."</td>
        <td>" . $row["seats"]. "</td>
        <td>" . $row["fare"]."</td>
        <td>" . $row["availdate"]. "</td>

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


<h2>route table</h2>
<table id="ctstyle">
    <tr>
        <th>train id's</th>
        <th>stop  no</th>
        <th>station id's</th>
        <th>arrival time</th>
        <th>depature time</th>
    </tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT trainid,stopno,stid,atime,dtime FROM route";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["trainid"]."</td>
        <td>" . $row["stopno"]. "</td>
        <td>" . $row["stid"]."</td>
        <td>" . $row["atime"]. "</td>
        <td>" . $row["dtime"]."</td>

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

<h2>trainstatus table</h2>
<table id="ctstyle">
    <tr>
        <th>train id's</th>
        <th>availdate</th>
        <th>booked seats</th>
        <th>availble seats</th>
        <th>waiting seats</th>
    </tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT trainid,availdate,bseats,aseats,wseats  FROM trainstatus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["trainid"]."</td>
        <td>" . $row["availdate"]. "</td>
        <td>" . $row["bseats"]."</td>
        <td>" . $row["aseats"]. "</td>
        <td>" . $row["wseats"]."</td>

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

<h2>user table</h2>
<table id="ctstyle">
    <tr>
        <th>email</th>
        <th>user id's</th>
        <th>password</th>
        <th>age</th>
        <th>gender</th>
        <th>phone number</th>
        <th>city name's</th>
        <th>state name's</th>
        <th>security question's</th>
        <th>security answers</th>
    </tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email,uid,passwd,age,gender,phno,city,state,sque,sans  FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["email"]."</td>
        <td>" . $row["uid"]. "</td>
        <td>" . $row["passwd"]."</td>
        <td>" . $row["age"]. "</td>
        <td>" . $row["gender"]."</td>
        <td>" . $row["phno"]. "</td>
        <td>" . $row["city"]."</td>
        <td>" . $row["state"]. "</td>
        <td>" . $row["sque"]."</td>
        <td>" . $row["sans"]. "</td>       

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<h2>reserve table</h2>
<table id="ctstyle">
    <tr>
        <th>pnr status</th>
        <th>user id's</th>
        <th>seat no</th>
        <th>reserve status</th>
        <th>booked date</th>
        <th>train id's</th>
        <th>passenger name</th>
    </tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pnr,uid,seatno,rstatus,bdate,trainid,pname FROM reserve";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["pnr"]."</td>
        <td>" . $row["uid"]. "</td>
        <td>" . $row["seatno"]."</td>
        <td>" . $row["rstatus"]. "</td>
        <td>" . $row["bdate"]."</td>
        <td>" . $row["trainid"]. "</td>
        <td>" . $row["pname"]. "</td>

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>






</body>
</html>