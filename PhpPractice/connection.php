<?php
    
    $conn = mysqli_connect("localhost", "root", "", "login_demo");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>