<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narsadb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM images ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows >0) {

   echo "<table border=3 width=200>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> <img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=600 height=500 >";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No images found in the database.";
}

$conn->close();
?>