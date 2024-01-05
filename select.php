<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Data</title>
    <a href="13_Odev.php">Form Sayfasına Geri Dön</a>
    <style>
        table {
            
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->select_db("myDB");
$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<h1>Kaydedilen veriler</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>İsim</th><th>Soyisim</th><th>Email</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Veri Bulunamadı";
}

$conn->close();
?>
</body>
</html>
