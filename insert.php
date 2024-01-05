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
$name = $_POST["u_name"]; 
$lname = $_POST["u_lname"]; 
$email = $_POST["u_email"];


$conn->select_db("myDB");
if (empty($name) || empty($lname) || empty($email)) {
    echo "Veri kaydedilemedi,lütfen tüm alanları doldurun.";
} else {
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', '$lname', '$email')";
$query = mysqli_query($conn, $sql);
echo $query;
echo "Veri Başarıyla Kaydedildi";
}

$conn->close();

?>
<br>
<br>
<a href="select.php">Tabloyu Görüntüle</a>
<br>
<a href="13_Odev.php">Form Sayfasına Geri Dön</a>
