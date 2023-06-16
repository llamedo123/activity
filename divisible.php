<!-- Write a function called pikaChu that takes an integer as input and returns
"Pika" if the number is divisible by 3, "Chu" if it is divisible by 5, and "PikaChu
 if it is divisible by both 3 and 5. If the number is not divisible by either, 
 return the number itself." -->

<?php
    function pikaChu($number){
        if($number % 3 === 0 && $number % 5 === 0){
        return "PikaChu";
    } elseif($number % 3 === 0){
        return "Pika";
    } elseif($number % 5 === 0){
        return "Chu";
    } else {
        return $number;
    }
}

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $pikaChu = $_POST['number'];
        $result = pikaChu($pikaChu);
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
        <label for="number">Input Number: </label>
        <input type="number" name="number" id="number">

        <button type="submit">Determined</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result"><?php echo $result; ?></div>
    <?php endif; ?>
</body>
</html>