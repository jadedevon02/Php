<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>Register Form</title>
</head>
<body>
   
  
    <form class="form" action="registration.process.php" method="POST">
        <h2>Registration Form</h2>
        <label class="label" for="fullname">First Name: </label>
        <input class="input" type="text" name="first_name" required>

        <label class="label" for="lastname">Last Name: </label>
        <input type="text" name="last_name" required>

        <label class="label" for="phone_number"> Phone Number: </label>
        <input type="text" name="phone_number" required>

        <label class="label" for="username">Email: </label>
        <input type="text" name="username" required>

        <label class="label" for="password">Password :</label>
        <input type="password" name="password" required>
   

        <input class="submitButton" type="submit" name="submit">
        <p class="login-form">Already have an Account?<a href="Login.php">Log In</a></p>


</body>
</html>
    