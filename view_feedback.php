<?php

session_start();

include "db.php";

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT feedback.*, students.name
        FROM feedback
        JOIN students
        ON feedback.student_id = students.id
        ORDER BY feedback.id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>View Feedback</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Student Feedback</h2>

    <table>

        <tr>

            <th>Student</th>
            <th>Faculty</th>
            <th>Subject</th>
            <th>Overall Rating</th>
            <th>Comments</th>

        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td>
                <?php echo htmlspecialchars($row["name"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["faculty"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["subject"]); ?>
            </td>

            <td>
                <?php echo $row["overall_rating"]; ?>/5
            </td>

            <td>
                <?php echo htmlspecialchars($row["comments"]); ?>
            </td>

        </tr>

        <?php } ?>

    </table>

    <br>

    <a href="dashboard.php">
        Back to Dashboard
    </a>

</div>

</body>
</html>