<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="min.php" method="post">
        <h2>Nhập từng phần tử</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $size = $_POST["size"];            
            };
            
            echo "<input type='text' name='size' value='$size'/>";
            for ($i = 0; $i<$size; $i++) {
                echo "<br/>Element $i: <input type='text' name='element$i'/>";
            };
        ?>
        <br/><input type='submit' value='Next'/>
    </form>
</body>
</html>
