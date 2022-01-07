<?php
// $u_name=$_REQUEST[''];
// $password=$_REQUEST[''];

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
if(isset($_REQUEST["Username"], $_REQUEST["Password"])) 
        {     

            $name = $_REQUEST["Username"]; 
            $password = $_REQUEST["Password"]; 
            echo $name;
            echo $password;

            $result1 = mysql_fetch("SELECT * FROM user WHERE psw = '".$password."'");
            $result2 = mysql_fetch("SELECT * FROM user WHERE u_name = '".$name."' ");
           echo $result1;
            if($name == $result2 && $password == $result1) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $name; 
                echo "successfully logged_in";

				header("Location:home.html");

            }
            else
            {
                echo'The username or password are incorrect!';
            }
    } 



// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close(); 
?>