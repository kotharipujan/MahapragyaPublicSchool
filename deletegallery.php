<?php

include "Connection.php"; // Using database connection file here

if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Prepare and execute the delete query
    $del = mysqli_query($conn, "DELETE FROM gallerytitle WHERE id = '$id'");

    if ($del) {
        // Close the connection and redirect on success
        mysqli_close($conn);
        header("Location: viewgallerytitle.php"); // Redirects to all records page
        exit;
    } else {
        // Error handling for query failure
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the connection if it's still open
if ($conn) {
    mysqli_close($conn);
}
?>
