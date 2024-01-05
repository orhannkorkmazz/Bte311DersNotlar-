<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db("myDB");

$search_name = $_POST["search_name"];

$sql = "SELECT * FROM MyGuests WHERE firstname = '$search_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " <br> İsim: " . $row["firstname"]. " <br> Soyisim: " . $row["lastname"]. " <br> Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Kayıt bulunamadı.";
}

$conn->close();
?>
