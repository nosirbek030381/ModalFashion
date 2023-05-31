<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narsadb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $allowedMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png");
    if (!in_array($_FILES['image']['type'], $allowedMimeTypes)) {
        die("Error: Only images are allowed");
    }
    $title=$_POST['title'];
    $malumot =$_POST['malumot'];
    $sana=$_POST['sana'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageName = $_FILES['image']['name'];
    $mimeType = $_FILES['image']['type'];

    $stmt = $conn->prepare("INSERT INTO images (title, malumot, sana, image_name, mime_type, image_data) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$title,$malumot,$sana, $imageName, $mimeType, $imageData);
    if ($stmt->execute()) {
        echo "malumot saqlandi";

    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

