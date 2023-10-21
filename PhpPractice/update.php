<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Update User</title>
</head>
<body>
   
    <form class="form" action="chatgpt_update.php?id=<?= $_GET["id"]; ?>" method="POST">
       
        <h2 class="reg-form">Update Form</h2>

        <label for="fullname">First Name: </label>
        <input class="input" type="text" name="first_name" required>

        <label for="lastname">Last Name: </label>
        <input type="text" name="last_name" required>

        <label for="phone_number"> Phone Number: </label>
        <input type="text" name="phone_number" required>

        <label for="username"> Email: </label>
        <input type="text" name="username" required>

        <label for="password">Password :</label>
        <input type="password" name="password" required>
    
        <input class="submitButton" type="submit" name="submit">
    </form>

</body>
</html>