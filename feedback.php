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

    <title>Give Feedback</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Student Feedback Form</h2>

    <form action="submit_feedback.php" method="post">

        <label>Faculty</label>

        <select name="faculty" required>

            <option value="">Select Faculty</option>

            <option value="Dr. Kumar">
                Arshad sir
            </option>

            <option value="Dr. Ahmed">
                Ashraf Ali sir
            </option>

            <option value="Dr. Ravi">
                Usman sir
            </option>

        </select>


        <label>Subject</label>

        <select name="subject" required>

            <option value="">Select Subject</option>

            <option value="PHP">
                PHP
            </option>

            <option value="Java">
                DBMS
            </option>

            <option value="Database">
                Cloud Computing
            </option>

        </select>


        <label>Teaching Quality</label>

        <input type="number"
               name="teaching"
               min="1"
               max="5"
               required>


        <label>Explanation</label>

        <input type="number"
               name="explanation"
               min="1"
               max="5"
               required>


        <label>Communication</label>

        <input type="number"
               name="communication"
               min="1"
               max="5"
               required>


        <label>Subject Knowledge</label>

        <input type="number"
               name="knowledge"
               min="1"
               max="5"
               required>


        <label>Punctuality</label>

        <input type="number"
               name="punctuality"
               min="1"
               max="5"
               required>


        <label>Comments</label>

        <textarea name="comments"
                  placeholder="Enter your feedback"
                  rows="5"></textarea>


        <button type="submit">
            Submit Feedback
        </button>

    </form>

    <br>

    <a href="dashboard.php">
        Back to Dashboard
    </a>

</div>

</body>
</html>