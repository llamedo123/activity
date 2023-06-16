<!-- Write a PHP function called 'isPalindrome' that takes a string as input
and checks whether it is a palindrome or not. A Palindrome is a Word, Phrase, 
Number, or other sequence of charaters that reads the same forward and backward, 
ignoring spaces, punctuation, and capitalization. -->

<?php
    function isPalindrome($string){
        // remove the spaces, punctuation, and convert to lowercase
        $string = preg_replace('/[^A-Za-z0-9]/', '', strtolower($string));
        //reverse the string
        $reverseString = strrev($string);

        //check if the reverse string is equal to the original string
        if($string === $reverseString){
            return "a Palindrome";
        } else {
            return "Not a Palindrome";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $string = $_POST['string'];
        $result = isPalindrome($string);
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
    <h3>Check if Palindrome or Not</h3>
    <form action="" method="post">
        <label for="string">Input: </label>
        <input type="text" name="string" id="string">

        <button type="submit">Check</button>
    </form>
    <?php if(isset($result)): ?>
        <div class="result">It is <?php echo $result; ?>.</div>
        <?php endif; ?>
</body>
</html>