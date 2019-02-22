<html>
<head>
<title>Chon co so du lieu</title>
</head>
<body>
<?php
// $dbhost = 'localhost:3306';
// $dbuser = 'root';
// $dbpass = '';
// $db = 'classicmodels';
// $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ('Ket noi that bai');

    class InfoDB {
        public function InfoDB($dbhost, $dbuser, $dbroot, $db) {          
            $conn = new mysqli($dbhost, $dbuser, $dbroot, $db);
            return;
        }     
    }

    $conn = new InfoDB('localhost:3306','root','','classicmodels');
    if ($conn) {
        echo 'Success';
    } else {
        echo 'Error';
    }
 ?>

    
</body>
</html>