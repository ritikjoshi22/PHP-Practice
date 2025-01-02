<?php
// Definition:
// File handling allows you to read, write, and modify files. PHP provides functions like fopen(), fread(), fwrite(), and fclose() to perform file operations.

// Writing to a file
$file = "example.txt";
$content = "Hello, this is a sample content for file handling in PHP.\n";

// Open the file in write mode (creates the file if it doesn't exist)
$fileHandle = fopen($file, "w");

// Write content to the file
fwrite($fileHandle, $content);

// Close the file after writing
fclose($fileHandle);

echo "Content written to file successfully.<br>";

// Reading from a file
// Open the file in read mode
$fileHandle = fopen($file, "r");

// Read and display the content of the file
while (!feof($fileHandle)) { // Loop until the end of the file
    echo fgets($fileHandle) . "<br>"; // Read line by line
}

// Close the file after reading
fclose($fileHandle);
?>
