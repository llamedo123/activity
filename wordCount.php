<!-- Write a function called 'wordCount' that takes a string as input and returns the number
of words in the string. A word is defined as a sequence of charaters reparated by whitespace. -->

<?php
    function wordCount($string){
        $trimmedString = trim($string);
        $words = preg_split('/\s+/',$trimmedString);

        $count = count($words);
        return $count;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $wordCount = $_POST['count'];
        $result = wordCount($wordCount);
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
        <label for="count">Input Your Text:</label>
        <input type="text" name="count" id="count">

        <button type="submit">Determined</button>
    </form>

    <?php if(isset($result)): ?>
        <div class="result">There are <?php echo $result; ?> Words.</div>
    <?php endif; ?>
</body>
</html>