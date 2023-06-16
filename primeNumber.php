<!-- Write a function called 'isPrime' that takes an integer as input and checks whether
it is a prime or not. A prime number is a natural number greater than 1 that is divisible
 only by 1 and itself. -->

 <?php

    function isPrime($integer){
        // check if the number is less than 2
        if ($integer < 2){
            return "Not a PRIME Number";
        }

        // check for factors from 2 to the square root of the number
        for($i = 2; $i <= sqrt($integer); $i++){
            if($integer % $i){
                return false;
            }
        }
        return "PRIME a Number";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $prime = $_POST['prime'];
        $result = isPrime($prime);
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
        <label for="prime">Input</label>
        <input type="number" name="prime" id="prime">

        <button type="submit">Determined</button>
    </form>

    <?php if(isset($result)): ?>
        <div class="result">This <?php echo $prime; ?> is <?php echo $result; ?>.</div>
        <?php endif; ?>
 </body>
 </html>