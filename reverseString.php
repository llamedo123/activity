<!-- Write a PHP function called "reverseString" that takes a string as input
and returns the reverse version of the string. The function should reverse
the order of characters in the string. -->

<?php
    function reverseString($string){
        $chars = str_split($string);
        $reverseChars = array_reverse($chars);
        $reverseString = implode('', $reverseChars);
        return $reverseString;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $string = $_POST['string'];
        $result = reverseString($string);
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
        <label for="string">Input: </label>
        <input type="text" name="string" id="string">
        <button type="submit">Reverse</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result"> The Reverse String of "<?php echo $string; ?>" is
    "<?php echo $result; ?>".</div>
    <?php endif; ?>

</body>
</html>