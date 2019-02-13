<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculattor</title>
    <style>
        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }
    </style>
</head>
<body>
    <?php
        class Calculator {
            function Calculator(){         
            }

            function calculate($firstOper,$secondOper,$operator){
                $result;
                
                switch ($operator) {
                    case "+":
                        $result = $firstOper + $secondOper;
                        break;
                    case "-":
                        $result = $firstOper - $secondOper;
                        break;
                    case "x":
                        $result = $firstOper * $secondOper;
                        break;
                    case "/":
                        try {
                            if ($secondOper == 0) {
                                throw new Exception("Division by zero");
                            } else {
                                $result = $firstOper / $secondOper;
                            };                        
                        } 
                        catch (Exception $e) {                        
                            $result = "Cannot divide to 0";
                        }                    
                        break;
                    default:
                };

                return $result;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstOper = $_POST["first_operand"];
            $secondOper = $_POST["second_operand"];
            $operator = $_POST["operator"];

            $calc = new Calculator;
            $result = $calc->calculate($firstOper,$secondOper,$operator);

            echo "    <form>
                <div>
                    <h2>Simple Calculator</h2>
                    
                    <label>First Operand:</label>$firstOper<br/>            
                    <label>Operator:</label>$operator<br/>                        
                    <label>Second Operand:</label>$secondOper<br/>
                    <label>Result:</label>$result                
                </div>
            </form>";
        }
    ?>

</body>
</html>
