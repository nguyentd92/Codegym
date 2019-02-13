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
    <form method="post" action="calc.php">
        <div>
            <h2>Simple Calculator</h2>
            
            <label>First Operand:</label><input name="first_operand" type="text"/><br/>            
            <label>Operator:</label>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                </select><br/>
            <label>Second Operand:</label><input name="second_operand" type="text"/>
        
        </div>
        <div>
            <input type="submit" value="Calc"/>
        </div>
    </form>
</body>
</html>