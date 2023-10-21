<?php
    include 'connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];
     

        $sql = "INSERT into registration (first_name, last_name, phone_number, username, password) values('$first_name','$last_name','$phone_number','$username','$password')";
    
        // Perform the insert operation
        if($conn->query($sql) === TRUE){
            header("Location: display.php");
            exit();
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if (mysqli_query($conn, $sql)) {
            echo "Registered Succesfully!!";
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);

    }
