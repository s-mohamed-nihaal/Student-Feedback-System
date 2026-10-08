<?php

session_start();
include "db.php";

if (isset($_POST["email"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students 
            WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $student = mysqli_fetch_assoc($result);

        $_SESSION["student_id"] = $student["id"];
        $_SESSION["student_name"] = $student["name"];

        setcookie("student_name", $student["name"], time() + 86400);

        header("Location: dashboard.php");
        exit();

    } else {

        $message = "Invalid email or password";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Login</h2>


    <form method="post">

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">
            Login
        </button>

    </form>

    <p>
        New student?
        <a href="signup.php">Create Account</a>
    </p>

</div>

</body>
</html>