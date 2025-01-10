<?php

include "Connection.php"; // Using database connection file here

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = trim($_POST['title']);

    // File upload configuration
    $targetDir = "upload/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);

    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    // Prepare values for SQL
                    $insertValuesSQL .= "('$fileName', '$title'),";
                } else {
                    $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                }
            } else {
                $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = rtrim($insertValuesSQL, ',');
            // Insert image file name into database
            $query = "INSERT INTO gallerytitle (file_name, title) VALUES $insertValuesSQL";

            if (mysqli_query($conn, $query)) {
                // Success
                $statusMsg = "Files uploaded successfully.";
            } else {
                $statusMsg = "Database insertion failed: " . mysqli_error($conn);
            }
        } else {
            $statusMsg = 'No valid files to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

    // Store the status message in a session to display on the next page
    session_start();
    $_SESSION['statusMsg'] = $statusMsg;

    // Close the connection and redirect
    mysqli_close($conn);
    header("Location: addimages.php");
    exit;
} else {
    echo "Invalid request.";
}
?>
