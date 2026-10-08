<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_feedback",
    3307
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>