<?php
// Definition:
// File uploads allow users to upload files to the server using an HTML form and PHP script for processing.

// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploaded_file'])) {
    $file = $_FILES['uploaded_file'];

    // Get file properties
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Define the upload directory
    $uploadDir = "uploads/";
    $uploadPath = $uploadDir . basename($fileName);

    if ($fileError === 0) {
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "File uploaded successfully: " . $fileName . "<br>";
        } else {
            echo "Error uploading file.<br>";
        }
    } else {
        echo "Error occurred during file upload.<br>";
    }
}
?>

<!-- HTML form for file upload -->
<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Choose a file to upload:</label>
    <input type="file" name="uploaded_file" id="file">
    <button type="submit">Upload File</button>
</form>
