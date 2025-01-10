<?php
include_once 'Connection.php'; // Ensure the correct path to the database connection file

$statusMsg = '';

// File upload path
$targetDir = "uploadedfiles/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

// Check if the form was submitted and a file was uploaded
if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allowed file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to the server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            $statusMsg = "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message and redirect
if (!empty($statusMsg)) {
    echo "<script>alert('$statusMsg');</script>";
    mysqli_close($conn); // Close the database connection
    header("location:addnotice.php"); // Redirect to the form page
    exit;
}
?>
