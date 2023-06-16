<!-- Write a function called sumArray that takes an array of integers as input and returns
the sum of all the numbers in the array. (Without Using Built-in Function) -->

<?php
    function sumArray($number){
        $sum = 0;

        foreach($number as $array){
            $sum += $array;
        }
        return $sum;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $inputArray = $_POST['array'];
        $array = explode(",", $inputArray);
        $array = array_map("trim", $array);
        $array = array_map("intval", $array);

        $result = sumArray($array);
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
        <label for="array">Input your Array Number: </label>
        <input type="text" name="array" id="array">

        <button type="submit">Calculate All</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result"> <h4>THIS ARRAY " <?php echo $inputArray; ?> " NUMBERS, CALCULATING...............
    HAS A TOTAL OF: "<?php echo $result; ?>"</h4></div>
    <?php endif; ?>
</body>
</html>