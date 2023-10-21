<?php
    include 'connection.php';

    function display_data(){
        global $conn;
        $query = "select * from registration";
        $result = mysqli_query($conn,$query);
        return $result;

    }



?>