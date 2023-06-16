<!-- Write a PHP function called 'fibonacci' that takes an integer 'n' as input and returns an array
of the first 'n' numbers in the Fibonacci sequence. The Fibonacci sequence is a series of numbers in which
each number (after the first two) is the sum of the two preceding ones. -->

<?php
    function fibonacci($n){
        $sequence = [];

        //handle special cases for n=0 and n=1
        if($n >= 1){
            $sequence[] = 0;
        }
        if($n >= 2){
            $sequence[] = 1;
        }

        //generate the fibonacci sequence
        for($i = 2; $i < $n; $i++){
            $sequence [] = $sequence[$i - 1] + $sequence[$i - 2];
        }
        return $sequence;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fibonacci = $_POST['fibonacci'];
        $result = fibonacci($fibonacci);
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
        <label for="fibonacci">First Fibonacci Sequence of:</label>
        <input type="number" name="fibonacci" id="fibonacci">

        <button type="submit">Determined</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result">The First <?php echo $fibonacci; ?> number in the 
    Fibonacci Sequence is <?php print_r($result); ?></div>
    <?php endif; ?>
</body>
</html>