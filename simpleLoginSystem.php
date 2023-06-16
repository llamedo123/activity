<!-- Create a PHP script that implements a basic login system. The script should have a 
login form where users can enter their username and password. Upon submitting the form, the 
script should validate the credentials and display a success message if the login is successful, 
or an error message if the credentials are invalid. -->

<?php
    session_start();

    //Define the valid username and password
    $validUsername = "admin";
    $validPassword = "admin123";

    // check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //check if the entered credentials are valid
        if($username === $validUsername && $password ===$validPassword) {

        // set the user as logged in by storing their username in the session
        $_SESSION['username'] = $username;
        echo "Login Successfully! Welcome " . $username;
        } else {
            echo "Invalid Username or Password";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Simple Login System</h3>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>
    </form>
</body>
</html>