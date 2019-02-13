<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <label>Gộp mảng</label>
        <div>
            <input type="text" name="arrayNumber1" placeholder='Nhập mảng 1'/><br/>
            <input type="text" name="arrayNumber2" placeholder='Nhập mảng 2'/><br/>
            <input type="submit" value="Gộp"/>
        </div>
    </form>

    <?php
        function combine2array($array1, $array2) {
            $array3 = $array1;
            
            foreach ($array2 as $index => $element) {
                array_push($array3, $element);
            }
            return $array3;
        };

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $str1 = $_POST['arrayNumber1'];
            $str2 = $_POST['arrayNumber2'];

            $regex = "/^\d{1}[0-9 ]+\d{1}$/";

            try {
                if (!preg_match($regex, $str1)) {
                    throw new Exception(' nhập lỗi mảng 1');
                };
                if (!preg_match($regex, $str2)) {
                    throw new Exception(' nhập lỗi mảng 2');
                };

                $arrayNumber1 = explode(' ',$str1);
                $arrayNumber2 = explode(' ',$str2);

                $arrayNumber3 = combine2array($arrayNumber1, $arrayNumber2);
                
                print_r($arrayNumber3);
    
            } catch (Exception $e) {
                echo "Lỗi: ".$e->getMessage();
            }          
            
        };
    ?>      

</body>
</html>