<?php

include "Connection.php"; // Using database connection file here

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $link = trim($_POST['link']);

    // Validate inputs
    if (!empty($title) && !empty($link)) {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO noticeboard (title, link) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $link);

        if ($stmt->execute()) {
            $stmt->close();
            mysqli_close($conn); // Close connection
            header("Location: noticeboard.php"); // Redirect to noticeboard page
            exit;
        } else {
            echo "Error adding record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Both title and link are required!";
    }
} else {
    echo "Invalid request!";
}

mysqli_close($conn); // Ensure connection is closed
?>
