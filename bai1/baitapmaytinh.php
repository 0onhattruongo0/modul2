<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin: 20px;
        }
    </style>
</head>

<body>
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <form action="" method="get">
            First Operand:<input type="text" name="number1"><br />
            Operator: <select name="tinhtoan" id="">
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
            </select><br />
            Second operand: <input type="text" name="number2"><br />
            <input type="submit" value="Calculate">
        </form>
    </fieldset>
    <h1>Result:</h1>
    <p id="result"></p>
    <?php
    class Calculator
    {
        function calculate()
        {
            if (isset($_GET["number1"]) & isset($_GET["number2"])) {
                $number1 = $_GET["number1"];
                $number2 = $_GET["number2"];
                $tinh = $_GET["tinhtoan"];
                if ($tinh == "Addition") {
                    return "$number1+$number2=" . ($number1 + $number2);
                }
                if ($tinh == "Subtraction") {
                    return "$number1-$number2=" . ($number1 - $number2);
                }
                if ($tinh == "Multiplication") {
                    return "$number1 x $number2=" . ($number1 * $number2);
                }
                if ($tinh == "Division") {
                    if ($number2 == 0) {
                        try {
                            throw new Exception($number2);
                        } catch (Exception $e) {
                            echo "Lỗi";
                        }
                    } else {
                        return "$number1:$number2=" . ($number1 / $number2);
                    }
                }
            }
        }
    }

    $cal = new Calculator;
    echo $cal->calculate();
    ?>

</body>

</html>