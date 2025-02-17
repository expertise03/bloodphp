<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO uploads (image, description) VALUES ('$target_file', '$description')";
        if ($conn->query($sql) === TRUE) {
            echo "Upload successful! <a href='gallery.php'>View Gallery</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required><br>
    <textarea name="description" placeholder="Enter description" required></textarea><br>
    <button type="submit">Upload</button>
</form>
