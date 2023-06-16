<!-- Determined the Odd and Even Numbers -->

<?php
    function oddEvenNumbers($numbers){
        if($numbers % 2 == 0){

        return "EVEN";
    } else {
        return "ODD";
    }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd_Even</title>
</head>

<body>
<form action="" method="post">
    <label for="number">Input Number: </label>
    <input type="number" name="number" id="number">

    <button type="submit">Determined</button>
</form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $evenOdd = $_POST['number'];
            $result = oddEvenNumbers($evenOdd);

            echo "The " . $evenOdd . " is an " . $result . " Number";
        }
    ?>


</body>
</html>