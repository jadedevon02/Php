<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Include your database connection code (e.g., 'database.php')
    include 'connection.php';

    if ($conn === false) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Check if the user exists in the database
    $sql = "SELECT * FROM registration WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
                header("location: display.php");
                die();
            }else{
                // Password is incorrect
                echo "<div class='alert alert-danger'>Incorrect password.</div>";
            }
        } else {
            // User not found
            echo "<div class='alert alert-danger'>User not found.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Statement preparation failed: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);

?>