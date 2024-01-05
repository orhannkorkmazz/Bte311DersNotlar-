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
    echo "Veri Tabanı Başarıyla oluşturuldu";
} else {
    echo "Veri tabanı oluşturulurken hata oluştu " . $conn->error;
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
    echo "Tablo Başarıyla oluşturuldu";
} else {
    echo "Tablo oluşturulurken hata meydana geldi: " . $conn->error;
}
*/
$conn->select_db("myDB");
?>
<h1>Kullanıcı Kayıt Formu</h1> 
<form action="insert.php" method="POST"> 
    <label>İsim: </label>
    <input type="text" name="u_name" placeholder="İsim"><br><br> 
    <label>Soyisim: </label> 
    <input type="text" name="u_lname" placeholder="Soyisim"><br><br> 
    <label>Email: </label> 
    <input type="email" name="u_email" placeholder="Email"><br><br> 
    <input type="submit" value="Kaydet"> 
   
    

</form>
<h1>Kullanıcı Bilgilerini Getir</h1>
<form action="user.php" method="POST">
    <label>İsim: </label>
    <input type="text" name="search_name" placeholder="İsime göre ara..">
    <input type="submit" value="Bul">
</form>

</body>
</html>
</html>
