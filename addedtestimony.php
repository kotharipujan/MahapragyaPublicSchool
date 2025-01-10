<?php

include "Connection.php"; // Using database connection file here

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Sanitize and validate inputs
    $tname = trim($_POST['tname']);
    $tpos = trim($_POST['tpos']);
    $tmessage = trim($_POST['tmessage']);
    $sname = trim($_POST['sname']);
    $sclass = trim($_POST['sclass']);
    $smessage = trim($_POST['smessage']);

    if (!empty($tname) && !empty($tpos) && !empty($tmessage) && !empty($sname) && !empty($sclass) && !empty($smessage)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO testimonial (tname, tpos, tmessage, sname, sclass, smessage) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $tname, $tpos, $tmessage, $sname, $sclass, $smessage);

        if ($stmt->execute()) {
            $stmt->close();
            mysqli_close($conn); // Close connection
            header("Location: viewtestimony.php"); // Redirect to viewtestimony page
            exit;
        } else {
            echo "Error adding record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request!";
}

mysqli_close($conn); // Ensure connection is closed
?>
