<?php
    //including the database connection in the connection.php 
    include 'connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database connection
        //instead of doing this we do INCLUDE to put in the another file
        // $conn = mysqli_connect("localhost", "root", "", "login_demo");
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }

        $sql = "SELECT username, password from registration where username = '$username'";
        var_dump($username);

    
        // Perform the insert operation
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $row = mysqli_fetch_assoc($result);
        var_dump($row);
        die();

        // Close the connection
        mysqli_close($conn);

    }
