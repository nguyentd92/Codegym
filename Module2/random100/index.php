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
        $array100 = array();
        while (count($array100)<100) {
            array_push($array100,mt_rand(0,99));
        };
    ?>
    <form method='post'>
        <div>
            <input type="text" name="index" placeholder='index'/>
            <input type='submit' value='GET'/>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $index = $_POST['index'];

            $pattern = "/^[1-9]{1}\d*$/";

            try {
                if (!preg_match($pattern, $index)) {
                    throw new Exception('input must be integer number');
                };               
                if ($index < 0 || $index >= 100) {
                    throw new Exception('index out of array');
                };
                echo "Value of element with index $index is $array100[$index]";
            } catch (Exception $e) {
                echo "Error: ".$e->getMessage();
            }           

            echo "<br/>";
            foreach ($array100 as $i => $value) {
                echo $value.' ';
            };
        }


    ?>
</body>
</html>