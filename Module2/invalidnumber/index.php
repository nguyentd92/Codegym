<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <label>Số thứ 1: </label><input type="text" name="number1st"/>
            <label>Số thứ 2: </label><input type="text" name="number2nd"/>
        </div>
        <div>
            <input type="submit" value="GO"/>
        </div>
    </form>
    <?php 
        function calc($num1, $num2, $operator) {
            try {
                switch ($operator) {
                    case '+':
                        return $num1 + $num2;
                    case '-':
                        return $num1 - $num2;
                    case 'x':
                        return $num1 * $num2;
                    case '/':
                        if ($num2 == 0) {
                            throw new Exception();
                        }

                        return $num1 / $num2;
                    default:
                }
            } catch (Exception $e) {
                return "Lỗi chia cho 0";
            }
        };

        if ($_SERVER["REQUEST_METHOD"] = "POST") {
            $number1st = $_POST['number1st'];
            $number2nd = $_POST['number2nd'];

            echo "<br/>x=$number1st y=$number2nd";
            echo "<br/>Tổng x + y = ".calc($number1st, $number2nd,'+');
            echo "<br/>Hiệu x - y = ".calc($number1st, $number2nd,'-');
            echo "<br/>Tích x * y = ".calc($number1st, $number2nd,'x');
            echo "<br/>Thương x / y = ".calc($number1st, $number2nd,'/');
        };
    ?>

    
</body>
</html>