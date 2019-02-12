<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Từ Điển Anh-Việt</h2>
    <form method="post">
        <input type="text" name="search" placeholder="Nhập từ tiếng Anh"/>
        <input type="submit" id="submit" value="Tìm"/>
    </form>

    <?php
        $dictionary = array("hello"=>"xin chào", "how"=>"thế nào", "book"=>"quyển vở", "computer"=>"máy tính");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchword = $_POST["search"];
            $flag = false;
            foreach ($dictionary as $word => $decription) {
                if ($word == $searchword) {
                    echo "Từ: ".$word."</br>Nghĩa:".$decription;
                    $flag = true;
                }
            }

            if (!$flag) {
                echo "Không tìm thấy từ cần tra";
            }
        }
    ?>
</body>
</html>