<?php

include "Connection.php"; // Using database connection file here

if (isset($_GET['title'])) {
    // Sanitize the input to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $_GET['title']);

    // Prepare and execute the delete query
    $del = mysqli_query($conn, "DELETE FROM noticeboard WHERE title = '$title'");

    if ($del) {
        // Close the connection and redirect on success
        mysqli_close($conn);
        header("Location: noticeboard.php");
        exit;
    } else {
        // Log detailed error for debugging and show a user-friendly message
        error_log("Error deleting record: " . mysqli_error($conn));
        echo "An error occurred while deleting the record.";
    }
} else {
    echo "Invalid request.";
}

// Close the connection if it's still open
if ($conn) {
    mysqli_close($conn);
}
?>
