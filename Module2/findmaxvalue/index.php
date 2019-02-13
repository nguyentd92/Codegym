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
        // function load($filename){
        //         // get content from file
        //         $jsondata = file_get_contents($filename);
        //         // decode content to array
        //         $arr_data = json_decode($jsondata, true);
                
        //         return $arr_data;
        // }
        // function saveDataJSON($filename,$array) {
        //     try {
        //         // converts json data into array
        //         $arr_data = load($filename);
        //         // Push user data to array
        //         array_push($arr_data, $array);
        //         //Convert updated array to JSON
        //         $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        //         //write json data into json file
        //         file_put_contents($filename, $jsondata);
        //         echo "Thêm hàng thành công!";
        //     } catch (Exception $e) {
        //         echo 'Lỗi: ', $e->getMessage(), "\n";
        //     }
        // }
        function maxOfArray($matrix) {
            $max = $matrix[0][0];
            $rowOfMax = $colOfMax = 0;
            foreach ($matrix as $row => $array) {
                foreach ($array as $col => $value)
                    if ($max < $value) {
                        $max = $value;
                        $rowOfMax = $row;
                        $colOfMax = $col;
                    };            
            }

            $result = array($max, $rowOfMax, $colOfMax);
            return $result;
        };
    ?>
    <form method="post">
        <h3>Thêm 1 mảng số nguyên vào 1 hàng của ma trận</h3>
        <label>Dãy số nguyên: </label><input type="text" name="str"/>
        <input type="submit" value="Thêm"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $par = $_POST["str"];
            $matrix = array();
            $regex = "/^\d{1}[0-9 ,]+$/";
            $regex2 = "/^\d{1}[0-9 ]+\d+$/";

            try {
                if (!preg_match($regex, $par)) {
                    throw new Exception();
                }
                                
                $temp = explode(',',$par);

                foreach ($temp as $index => $str) {
                    if(!preg_match($regex2, $str)) {
                        throw new Exception();
                    };
                    $array = explode(' ',$str);
                    array_push($matrix, $array);
                }

                echo "<br/>Ma trận số:<br/>";

                foreach ($matrix as $row => $array) {
                    foreach ($array as $col => $value) {
                        echo "$value ";
                    }
                    echo "<br/>";
                }

                $result = maxOfArray($matrix);                  

                echo "<br/>Giá trị lớn nhất: $result[0] tại hàng $result[1] cột $result[2]";
            } catch (Exception $e){
                echo 'Lỗi nhập';
            }

           

        }
    ?>
</body>
</html>