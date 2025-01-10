<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <link rel="stylesheet" href="assests/css/common.css">

    <title>Add Notice</title>
</head>

<body>

<div id="mobile-logo">
    <p class="visible-lg" style="display:inline;float:left;left:3%;top:15%;position:relative;">
        <a href="">
            <img src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg" width="75px" height="85px" alt="My Logo">
            <span style="font-size:27px;font-family: 'Lato';font-weight:600;">MAHAPRAGYA <br>PUBLIC SCHOOL</span>
        </a>
    </p>
</div>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;">
    <!-- Add Navbar content here -->
</nav>

<div class="container" style="margin-top: 100px;">
    <div class="form-box">
        <h1>Add New Notice</h1>
        <p>Fill in all the details</p>
        <form action="addednotice.php" method="POST">
            <div class="form-group">
                <label for="title" style="font-size: 20px; font-weight: bold;">Title</label>
                <input class="form-control" id="title" type="text" name="title" placeholder="Enter notice title" required>

                <label for="link" style="font-size: 20px; font-weight: bold;">File Name</label>
                <input class="form-control" id="link" type="text" name="link" placeholder="Enter exact file name (e.g., results.pdf)" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
