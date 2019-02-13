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
        <h2>Tổng giá trị của các phần tử trên đường chéo chính</h2>
        <div>
            Nhập theo mẫu: 00 01 02,10 11 12,20 21 22<br/>            
            <input type='text' name='input' placeholder='a00 a01 a0n,a10 a11 a1n,a20 a21 a2n'/>
            <input type='text' name='col' placeholder='cột cần tính tổng'/>
            <input type='submit' value='Check'/>
        </div>        
    </form>

    <?php

        function sumOfColumn($array, $col) {
            $arrayLength = count($array);
            $sum = 0;
            for ($row=0; $row<$arrayLength; $row++) {
                if (count($array[$row]) <= $col) {
                    throw new Exception(' mảng lồi lõm');
                };
                $sum += $array[$row][$col];
            };
            return $sum;
        };
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $par = $_POST["input"];
            $colSum = $_POST['col'];
            $matrix = array();
            $regex = "/^\d{1}[0-9 ,]+$/";
            $regex2 = "/^\d{1}[0-9 ]+\d+$/";
            $pattCol = "/^\d+$/";

            try {
                if (!preg_match($regex, $par)) {
                    throw new Exception('nhập không hợp lệ');
                };

                if (!preg_match($pattCol, $colSum)) {
                    throw new Exception(' cột không hợp lệ');
                }

                                
                $temp = explode(',',$par);                

                foreach ($temp as $index => $str) {
                    if(!preg_match($regex2, $str)) {
                        throw new Exception('nhập không hợp lệ');
                    };
                    $array = explode(' ',$str);
                    array_push($matrix, $array);
                };

                echo "<br/>Ma trận số:";
                echo "<br/><table>";
                foreach ($matrix as $row => $array) {
                    echo "<tr>";
                    foreach ($array as $col => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                };
                echo "</table>";

                $sum = sumOfColumn($matrix, $colSum);

                echo "Tổng giá trị các phần tử trên cột $colSum là $sum";
            } catch (Exception $e){
                echo '<br/>Lỗi '.$e->getMessage();
            }
        }
    ?>
</body>
</html>