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
        function minOfArray($array) {
            $min = $array[0];
            $position = 0;
            foreach ($array as $index => $number) {
                if ($min > $number) {
                    $min = $number;
                    $position = $index;
                };            
            }

            $result = array($min, $position);
            return $result;
        };

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $size = $_POST['size'];
            $arrayNumber = array();

            for ($i = 0; $i < $size; $i++) {
                $value = $_POST["element$i"];
                array_push($arrayNumber, $value);
            };
        };

        $result = minOfArray($arrayNumber);

        foreach ($arrayNumber as $index => $value) {
            echo "$value ";
        }


        echo "<br/>Giá trị nhỏ nhất là $result[0] tại index $result[1]";

    ?>
</body>
</html>