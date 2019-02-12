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
        <h2>Your weight(kg)</h2>
        <input name="weight" type="text" placeholder="Nhập số nguyên"/>
        <input type="submit" value="Dịch">
    </form>

    <?php
        $result = "Out of ability";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST["weight"];
            $result = null;

            $result = translate($weight);
        };

        echo "Number: ".$weight."</br>Result: ".$result;
        

        function translate($input) {
            $pattern = "/^[1-9]{1}\d{0,2}$/";
            
            if (!preg_match($pattern, $input)) {
                return "out of ability";
            };
            if ($input == 0) {
                return "zero";
            };
            
            return hundredWord($input);
        }

        function hundredWord($input) {
            if (strlen($input) < 3) {
                return (tenWord($input));
            };

            $hundred = floor($input / 100);
            $remainder = $input % 100;

            if ($remainder == 0) {
                return oneWord($hundred)." hundred ";
            } else {
                return oneWord($hundred)." hundred and ".tenWord($remainder);
            }
            
        }

        function tenWord($input) {
            if (strlen($input) < 2) {
                return oneWord($input);
            }
            $remainder = $input % 10;
            $ten = floor($input / 10);

            if ($ten == 1) {
                switch ($remainder) {
                    case 0: return "ten";
                    case 1: return "eleven";
                    case 2: return "twelve";
                    case 3: return "thirteen";
                    case 4: return "forteen";
                    case 5: return "fifteen";
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                        return oneWord($remainder)."teen";
                }
            };

            switch ($ten) {
                case 2:
                    return "twenty ".oneWord($remainder);
                case 3:
                    return "thirty ".oneWord($remainder);
                case 5: 
                    return "fifty ".oneWord($remainder);
                case 8:
                    return "eighty ".oneWord($remainder);                        
                default:                    
            };

                    
            return oneWord($ten)."ty ".oneWord($remainder); 
        }

        function oneWord($one) {
            switch ($one) {
                case 0: return "";
                case 1: return "one";
                case 2: return "two";
                case 3: return "three";
                case 4: return "four";
                case 5: return "five";
                case 6: return "six";
                case 7: return "seven";
                case 8: return "eight";
                case 9: return "nine";
                default:
            }
        }
    ?>
</body>
</html>