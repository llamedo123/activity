<!-- Write a PHP Function called "factorial" that takes a positive integer 'n' as input and calculates the 
factorial of 'n'. The factorial of a non-negative integer 'n' is the product of all positive integers less
than or equal to 'n'-->

<?php
    function factorial($n){
        if($n === 0){
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $factorial = $_POST['factorial'];
        $result = factorial($factorial);
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
        <label for="factorial">Input</label>
        <input type="number" name="factorial" id="factorial">

        <button type="submit">Determined</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result">The Factorial of <?php echo $factorial; ?> is "<?php echo $result; ?>"</div>
    <?php endif; ?>
</body>
</html>