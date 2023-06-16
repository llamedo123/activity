<!-- Write a function called countVowels that takes a string as input and return the count of vowels 
(a, e, i, o, u) in the string. -->

<?php
    function countVowel($number){
        $count = 0;
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $number = strtolower($number);

        for($i = 0; $i < strlen($number); $i++){
            if(in_array($number[$i], $vowels)){
                $count++;
            }
        }
        return $count++;
    }


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $countVowel = $_POST['countVowels'];
        $result = countVowel($countVowel);
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
        <label for="countVowels">Input Your Paragraph:</label>
        <input type="text" name="countVowels" id="countVowels">

        <button type="submit">Determined</button>
    </form>

    <?php if(isset($result)): ?>
        <div class="result">The text you have type which is " <?php echo $countVowel; ?>
    " has a count vowel of <?php echo $result; ?></div>
    <?php endif; ?>
</body>
</html>
