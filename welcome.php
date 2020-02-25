<?php
session_start();
$servername = "localhost";
$username = "root";
$pass= "";
$dbname= "try";

// Create connection
$conn = new mysqli($servername, $username, $pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username=$_POST["Username"];
$password=$_POST["Pass"];
$email=$_POST["Email"];
$aadhar=$_POST["Aadhar"];
$sql= "INSERT INTO signup(Username, Password, Email, Aadhar)  VALUES ('$username','$password','$email','$aadhar')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
