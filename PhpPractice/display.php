<?php
    include 'connection.php';
    include 'function.php';
    $query = "select * from registration";
    $result = mysqli_query($conn,$query);
    $result = display_data();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/css/bootstrap.min.css">
    <title>Display Data</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5 ">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-5 text-center ">Data in Database</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center border border-dark-subtle">

                            <tr>
                                
                                    <td>School ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Phone Number</td>
                                    <td>Email</td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                
                            </tr>
                            <tr>
                                <?php
                                
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <td><?php echo $row['school_id'];?></td>
                                <td><?php echo $row['first_name'];?></td>
                                <td><?php echo $row['last_name'];?></td>
                                <td><?php echo $row['phone_number'];?></td>
                                <td><?php echo $row['username'];?></td>
                                <td><a href="update.php?id=<?= $row['school_id']; ?>" class="btn btn-primary btn-sm">Update</a></td>
                                <td><a href="delete.php?id=<?= $row['school_id']; ?> " class="btn btn-danger btn-sm>">Delete</a></td>

                            </tr>

                                    
                                <?php            
                                }

                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    
</body>
</html>