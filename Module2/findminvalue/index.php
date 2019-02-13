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
    ?>
    <form method="post">
        <h3>Nhập dãy số nguyên cách nhau bởi khoảng trắng</h3>
        <label>Mảng số nguyên: </label><input type="text" name="str"/>
        <input type="submit" value="Find"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $str = $_POST["str"];

            $regex = "/^\d{1}[0-9 ]+\d{1}$/";

            if ( preg_match($regex, $str)) {
                $array = explode(' ',$str);

                $result = minOfArray($array);
    
                echo "Dãy số: ";
                foreach ($array as $index => $value) {
                    echo $value." ";
                }
                echo "<br/>Giá trị nhỏ nhất: $result[0] tại index $result[1]";
            } else {
                echo "Nhập sai";
            }          

        }
    ?>
</body>
</html>