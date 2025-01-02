<?php
// Definition:
// File validation ensures that uploaded files meet specific criteria, such as size, type, and extension.

// Allowed file types and size limit
$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$maxFileSize = 2 * 1024 * 1024; // 2 MB

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['validated_file'])) {
    $file = $_FILES['validated_file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = $file['type'];

    // Validate file type
    if (!in_array($fileType, $allowedTypes)) {
        echo "Invalid file type. Allowed types: JPEG, PNG, PDF.<br>";
        exit;
    }

    // Validate file size
    if ($fileSize > $maxFileSize) {
        echo "File size exceeds the limit of 2 MB.<br>";
        exit;
    }

    // Define upload directory
    $uploadDir = "validated_uploads/";
    $uploadPath = $uploadDir . basename($fileName);

    if (move_uploaded_file($fileTmpName, $uploadPath)) {
        echo "File uploaded successfully after validation: " . $fileName . "<br>";
    } else {
        echo "Error uploading file.<br>";
    }
}
?>

<!-- HTML form for file upload with validation -->
<form action="" method="POST" enctype="multipart/form-data">
    <label for="validated_file">Choose a file to upload (JPEG, PNG, PDF only, Max: 2MB):</label>
    <input type="file" name="validated_file" id="validated_file">
    <button type="submit">Upload File</button>
</form>
