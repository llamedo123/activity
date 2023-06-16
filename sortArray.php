<!-- Write a PHP function called 'sortArray' that takes an array of number as input and sorts
the numbers in ascending orders. You can use any sorting algorithm of your choice to
implement the function. -->

<?php
    function sortArray($number){
        if(empty($number)){
            return [];
        }

        $array = explode(',', $number);
        $array = array_map('trim', $array);
        $array = array_filter($array);

        sort($array);
        return $array;  
    }
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sort = $_POST['array'];
        $result = sortArray($sort);
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
    <p>Used comma(,) for example: 2,1,3,4,5</p><br>
    <form action="" method="post">
        <label for="array">Input Array:</label>
        <input type="text" name="array" id="array">
        <button type="submit">Determined</button>
    </form>

    <?php if(!empty($result)): ?>
        <div class="result">
            Sorted Array: <?php echo implode(', ', $result); ?>
        </div>
    <?php endif; ?>
</body>
</html>