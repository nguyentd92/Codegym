<?php
    include 'connect.php';
    include 'showtable.php';

    $conn = mysqli_connect('localhost:3306','root','','library') or die("Ket noi khong thanh cong");;
    if ($conn) {
        echo 'Success';
    } else {
        echo 'Error';
    }
?>
<form method="post">
    <div>
        <table>
            <tr>
                <th>Code</th>
                <td><input name="code" type="text"/></td>
            </tr>
            <tr>
                <th>Category name:</th>
                <td><input name="name" type="text"/></td>
            </tr>
            <tr><td></td>
                <td><input type="submit" value="Add"/></td>
            </tr> 
        </table>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $code = $_POST["code"];
        $name = $_POST["name"];

        $result = mysqli_query($conn, "INSERT INTO `category` VALUES ('$code','$name')");
        if  ($result) {
            echo 'Success';
        } else {
            echo 'Error';
        }
    }
    ?>
    <div>
        <?php
            echo showTable('student',$conn);
        ?>
    </div>

</form>
