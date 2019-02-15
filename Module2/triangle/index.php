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
        <h2>Triangle</h2>
        <div>
            <input type="text" name="side1" placeholder="side 1"/><br/>
            <input type="text" name="side2" placeholder="side 2"/><br/>
            <input type="text" name="side3" placeholder="side 3"/><br/>
            <input type="text" name="color" placeholder="color default is red"/>
        </div>
        <div>
            <input type="submit" value="Submit"/>
        </div>
    </form>

    <?php 
        require 'class.php';

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $color = $_POST['color'];
            $side = array($_POST['side1'],$_POST['side2'],$_POST['side3']);

            $pattern = "/^(\d+\.?\d*|\.\d+)$/";

            try {
                foreach ($side as $value) {
                    if (!preg_match($pattern,$value)) {
                        throw new Exception ('Wrong input');
                    };
                };

                $triangle = new Triangle ($side[0],$side[1],$side[2]);

                if (strlen($color) > 0) {
                    $triangle->setColor($color);
                };

                echo $triangle->toString();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>