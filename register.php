<?php
$c_name=$_REQUEST['Name'];
$c_id=$_REQUEST['Id'];
$e_mail=$_REQUEST['E-mail'];
$phone=$_REQUEST['number'];
$u_name=$_REQUEST['Username'];
$psw=$_REQUEST['Psd'];

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

$sql = "INSERT INTO user(consumer_id, c_name, u_name, psw, phone,e_mail)
VALUES ($c_id,'$c_name','$u_name', '$psw', $phone,'$e_mail')";
if($c_name!='' && $e_mail!='' && $phone!='' && $u_name!='' && $psw!=''){
	header("Location:login.html");
}



?>