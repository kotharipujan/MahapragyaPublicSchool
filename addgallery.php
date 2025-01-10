<?php

include "Connection.php"; // Using database connection file here

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Sanitize inputs to prevent SQL injection
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $id = mysqli_real_escape_string($conn, trim($_POST['id']));

    // Insert data into the database
    $query = "INSERT INTO gallerytitle (title, id) VALUES ('$title', '$id')";
    
    if (mysqli_query($conn, $query)) {
        // Success: Redirect to viewtestimony.php
        mysqli_close($conn); // Close connection
        header("Location: viewtestimony.php");
        exit;
    } else {
        // Display error if query fails
        echo "Error adding record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the connection if not already closed
if ($conn) {
    mysqli_close($conn);
}
?>
