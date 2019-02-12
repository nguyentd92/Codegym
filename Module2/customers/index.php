<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <table border="0">
        <caption><h1>Danh sách khách hàng</h1></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php 
            $customerlist = array(
                "1" => array("name" => "Mai Văn Hoàn",
                            "dateofbirth" => "1983-08-20",
                            "address" => "Hà Nội",
                            "photo" => "images/img1.jpg"),
                "2" => array("name" => "Nguyễn Văn Nam",
                            "dateofbirth" => "1983-08-20",
                            "address" => "Bắc Giang",
                            "photo" => "images/img1.jpg"),
                "3" => array("name" => "Nguyễn Thái Hòa",
                            "dateofbirth" => "1983-08-21",
                            "address" => "Nam Định",
                            "photo" => "images/3.jpg"),
                "4" => array("name" => "Trần Đăng Khoa",
                            "dateofbirth" => "1983-08-22",
                            "address" => "Hà Tây",
                            "photo" => "images/img4.jpg"),
                "5" => array("name" => "Nguyễn Đình Thi",
                            "dateofbirth" => "1983-08-22",
                            "address" => "Hà Nội",
                            "photo" => "images/img5.jpg")
            );

            foreach ($customerlist as $key => $values) {
                echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$values["name"]."</td>";
                echo "<td>".$values["dateofbirth"]."</td>";
                echo "<td>".$values["address"]."</td>";
                echo "<td><image src='".$values["photo"]."'width = '60px' height ='60px'/></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>