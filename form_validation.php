<!-- Form validation -->

<?php
    function test_input($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;

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
    <form action="" method="post">
        <label for="">FirstName: </label>
        <input type="text" name="firstname" id="firstname" required><br>

        <label for="">LastName: </label>
        <input type="text" name="lastname" id="lastname" required><br>

        <label for="">Email: </label>
        <input type="email" name="email" id="email" required><br>

        <label for="">Address: </label>
        <input type="text" name="address" id="address" required><br><br>

        <input type="submit" type="submit" id="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           $fname = test_input($_POST['firstname']); 
           $lname = test_input($_POST['lastname']); 
           $email = test_input($_POST['email']); 
           $add = test_input($_POST['address']);
           
           $errors = [];
           if(empty($fname)){
            $errors [] = "Required Name";
           }

           if(empty($lname)){
            $errors [] = "Required Name";
           }

           if(empty($email)){
            $errors [] = "Required Email";
           } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors [] = "Invalid Email";
           }

           if(empty($add)){
            $errors [] = "Required Address";
           }


           if(empty($errors)){
            echo "Successfully Submitted <br>";
            echo "Firstname: $fname" . "<br>";
            echo "Lastname: $lname" . "<br>";
            echo "Email: $email" . "<br>";
            echo "Address: $add";
           } else {
            echo "Failed to Submit Your Form <br>";
            foreach($errors as $error){
                echo "Error : $error";
            }
           }
        }

    ?>
</body>
</html>