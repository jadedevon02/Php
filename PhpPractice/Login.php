<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>Login Form</title>
</head>
<body>
   
  
    <form class="login-form" action="user_login.php" method="POST">
        <h2>Login Form</h2>

        <label class="login-username" for="username">Email: </label>
        <input type="text" name="username" required>

        <label class="login-label" for="password">Password :</label>
        <input type="password" name="password" required>
  

        <input class="login-submitButton" type="submit" name="submit">
        <p class="registration-form">No account sign up here :<a href="Registration.php">Sign Up</a></p>


</body>
</html>
    