<?php
$servername = "localhost";
$usern = "root";
$password = "";
$database="iwt";
// Create connection
$con= new mysqli($servername, $usern, $password,$database);

// Check connection
if ($con->connect_error) {
die("Connection failed: ". $con->connect_error);
}
else

?>