<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database


// Create table
$tablo = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";
if ($conn->query($tablo) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
$conn->select_db("myDB");
?>
<h1>HTML Form</h1> 
<form action="insert.php" method="POST"> 
    <label>Name: </label>
    <input type="text" name="u_name" placeholder="Name"><br><br> 
    <label>LastName: </label> 
    <input type="text" name="u_lname" placeholder="Lastname"><br><br> 
    <label>Email: </label> 
    <input type="email" name="u_email" placeholder="Email"><br><br> 
    <input type="submit" value="Kaydet"> 
    <br>
    <br>
    <a href="select.php">Tabloyu Görüntüle</a>

</form>

</html>
