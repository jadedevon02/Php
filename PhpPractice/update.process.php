<?php
    include 'connection.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $id = $_GET['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $sql = "UPDATE registration SET first_name = '$first_name', last_name = '$last_name', phone_number = '$phone_number', username = '$username', password = '$password' WHERE id = '$id'";
    
       

        $result = mysqli_query($conn, $sql);
        var_dump($result);
        die();

        if ($result) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        
        // Close the connection
        // mysqli_close($conn);


    }
