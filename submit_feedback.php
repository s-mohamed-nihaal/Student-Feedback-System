<?php

session_start();

include "db.php";

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION["student_id"];

$faculty = $_POST["faculty"];
$subject = $_POST["subject"];
$teaching = $_POST["teaching"];
$explanation = $_POST["explanation"];
$communication = $_POST["communication"];
$knowledge = $_POST["knowledge"];
$punctuality = $_POST["punctuality"];

$comments = $_POST["comments"];


/* Calculate overall rating */

$overall = (
    $teaching +
    $explanation +
    $communication +
    $knowledge +
    $punctuality
) / 5;

$overall = round($overall, 2);


/* Store feedback in database */

$sql = "INSERT INTO feedback
(student_id, faculty, subject, teaching, explanation, communication,
knowledge, punctuality, overall_rating, comments)
VALUES
('$student_id', '$faculty', '$subject', '$teaching', '$explanation',
'$communication', '$knowledge', '$punctuality', '$overall', '$comments')";

if (mysqli_query($conn, $sql))
    echo "Feedback submitted successfully";
else
    echo "Error";


/* File handling */

$file = fopen("feedback.txt", "a");

$data = "Student: " . $_SESSION["student_name"] . "\n";
$data = "Faculty: " . $faculty . "\n";
$data = "Subject: " . $subject . "\n";
$data = "Overall Rating: " . $overall . "\n";
$data = "Comments: " . $comments . "\n";
$data = "-----------------------------\n";

fwrite($file, $data);

fclose($file);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Feedback Submitted</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Feedback Submitted Successfully!</h2>

    <p>
        Overall Rating:
        <strong><?php echo $overall; ?>/5</strong>
    </p>

    <a href="dashboard.php">
        Back to Dashboard
    </a>

</div>

</body>
</html>