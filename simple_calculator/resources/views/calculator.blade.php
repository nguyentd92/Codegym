<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action='Calculator' method='post'>
    @csrf
        <div>
            <input type='number' name = 'firstOperand' value={{ $firstOperand }} required/>
            <input type='number' name = 'secondOperand' value={{ $secondOperand }} required/>
        </div>
        <div>
            <input name='operator' type='submit' value = 'Addition'/>
            <input name='operator' type='submit' value = 'Subtraction'/>
            <input name='operator' type='submit' value = 'Multiplication'/>
            <input name='operator' type='submit' value = 'Division'/>
        </div>
    </form>

    <div>
        <label>Result: </label><span>{{ $result }}</span>

</body>
</html>