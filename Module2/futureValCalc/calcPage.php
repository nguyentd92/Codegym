<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }
        .error{
            color: red;
        }        
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $investment = $_POST["investment"];
            $rate = $_POST["rate"];
            $years = $_POST["years"];

            $result = $investment;
            $times = $years;
            while ($times-- > 0) {
                $result += $result*$rate*0.01;
            };

            echo "<div id='content'>
                <h1>Future Value Calculator</h1>
                <form>
                    <div id='data'>
                        <label>Investment Amount:</label>$".$investment."<br/>
        
                        <label>Yearly Interest Rate:</label>".$rate."%<br/>
        
                        <label>Number of Years:</label>".$years."<br/>                        

                        <label>Result: </label>$".$result."<br/>
                    </div>
                </form>            
            </div>";
        }

    ?>
</body>
</html>