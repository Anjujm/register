<?php

$power=$_REQUEST['pwr'];
$quantity=$_REQUEST['qty'];
$hours=$_REQUEST['hr'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}

$connected_loads=0;
$unit_price=10;
$energy=0;
$connected_loads= $connected_loads+($quantity*$power);
$energy=$energy+(($connected_loads*$hours)/1000);
$total_amount=$energy*$unit_price*30;

// $sql = "INSERT INTO userlist (id, firstname, lastname, phone, email)
// // VALUES ('$e','$a','$b', $c, '$d')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close(); 
?>