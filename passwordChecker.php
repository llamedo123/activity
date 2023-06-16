<!-- Write a PHP Function called 'checkPasswordStrength' that takes a string (password) as input
and checks its strength based on certain criteria. The Function should return a astring indication
the strength of the password. -->

<?php
    function checkPasswordStrength($password){
        //Check the length of your Password
        if(strlen($password < 8)){
            return "Weak: Password must have 8 Characters Long";
        }

        // Check for Upercase, Lowercase, Digit and Special Charaters
        if(!preg_match("/[A-Z]/", $password)){
            return "Weak: Password should contain at least one Uppercase";
        }
        if(!preg_match("/[a-z]/", $password)){
            return "Weak: Password should contain atleast one Lowercase ";
        }
        if(!preg_match("/\d/", $password)){
            return "Weak: Password should contain atleast one digit";
        }
        if(!preg_match("/[!@#$%^&*]/", $password)){
            return "Weak: Password should contain atleast one Special Charater";
        }

        // if all criteria is met or password is strong
        return "Strong: Your Password is Strong";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $checker = $_POST['password'];
        $result = checkPasswordStrength($checker);
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
    <h5>Check your password if Weak or Strong</h5><br>
    <form action="" method="post">
        <label for="password">Input Password: </label>
        <input type="password" name="password" id="password">

        <button type="submit">checkPasswordStrength</button>
    </form>

    <?php if(isset($result)): ?>
        <div class="result"><?php echo $result; ?></div>
    <?php endif; ?>

</body>
</html>