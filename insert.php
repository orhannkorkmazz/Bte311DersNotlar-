<?php
$servername = "localhost";
$username = "root";
$password = "";
$veritabani = "test";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['u_name']; 
$lname = $_POST['u_age']; 
$email = $_POST['u_email'];

$conn->select_db("myDB");

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', $lname, '$email')";
$query = mysqli_query($conn, $sql);
echo $query;


$conn->close();
?>