<?php

include "Connection.php"; // Using database connection file here

if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = intval($_GET['id']); // Use intval to ensure it's an integer

    // Prepare the delete query
    $stmt = $conn->prepare("DELETE FROM testimonial WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);

        // Execute the query and check for errors
        if ($stmt->execute()) {
            // Close the statement and connection, then redirect on success
            $stmt->close();
            mysqli_close($conn);
            header("Location: viewtestimony.php"); // Redirects to all records page
            exit;
        } else {
            // Log detailed error and show a user-friendly message
            error_log("Error executing query: " . $stmt->error);
            echo "An error occurred while deleting the record.";
        }
    } else {
        // Log error if statement preparation fails
        error_log("Statement preparation failed: " . $conn->error);
        echo "An error occurred while preparing the query.";
    }
} else {
    echo "Invalid request.";
}

// Close the connection if it's still open
if (isset($conn) && $conn) {
    mysqli_close($conn);
}
?>
