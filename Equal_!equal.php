<!-- Write a function equalUnequal which is it display when both numbers same "Equal" 
and if both are not "Not Equal". -->

<?php
    function equalUnequal($number1, $number2){

        if($number1 === $number2){
            return "EQUAL";
        } else {
            return "NOT EQUAL";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $result = equalUnequal($number1, $number2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="number1">Input 1: </label>
        <input type="number" name="number1" id="number1">

        <label for="number2">Input 2: </label>
        <input type="number" name="number2" id="number2">

        <button type="submit">Determined</button>
    </form>

        <?php if(isset($result)):?>
            <div class="result"> <h2>The number <?php echo $number1; ?>
            and <?php echo $number2; ?> is <?php echo $result; ?> number </h2> </div>
        <?php endif; ?>
</body>
</html>