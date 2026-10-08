<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Student Feedback System</h1>

    <h2>
        Welcome,
        <?php echo $_SESSION["student_name"]; ?>
    </h2>

    <div class="menu">

        <a href="feedback.php">
            Give Feedback
        </a>

        <a href="view_feedback.php">
            View Feedback
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>

</div>

</body>
</html>