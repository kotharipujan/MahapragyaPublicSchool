<?php

include "Connection.php"; // Using database connection file here

if (isset($_GET['id'])) {
    // Ensure the ID is numeric to prevent unwanted input
    $id = intval($_GET['id']);

    // Prepare and execute the delete query
    $del = mysqli_query($conn, "DELETE FROM enquiry WHERE id = '$id'");

    if ($del) {
        // Close the connection and redirect on success
        mysqli_close($conn);
        header("Location: welcome.php");
        exit;
    } else {
        // Log detailed error for debugging and show user-friendly message
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
