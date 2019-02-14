<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    function isPrime($number){
        if ($number === 0 || $number ===1) {
            return false;
        };
        $array = array(2,3,5,7);            

        foreach ($array as $index => $value) {
            if ($value === $number) {
                return true;
            }
            if ($number % $value === 0) {
                return false;
            };
        }

        return true;
    }

    $count = 0;
    $i = 0;

    while ($count < 20) {
        if (isPrime($i)) {
            echo "$i ";
            $count++;
        };
        $i++;
    }

    ?>
</body>
</html>