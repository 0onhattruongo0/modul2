<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Number1: <input type="number" name="number1">
        Number2: <input type="number" name="number2">
        <select name="toanhang" id="">
            <option value="sum">Sum</option>
            <option value="sub">Sub</option>
            <option value="mul">Mul</option>
            <option value="div">Div</option>
        </select>
        <button type="submit">CAL</button>
    </form>
    <?php
    if (isset($_GET["number1"]) && isset($_GET["number2"])) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $toanhang = $_GET["toanhang"];
        try {
            if ($number1 == "0" && $number2 == "0") {
                throw new Exception("Ngoại lệ: / by zero");
            }
            if ($toanhang == "sum") {
                echo $number1 . "+" . $number2 . "=" . ($number1 + $number2);
            } else if ($toanhang == "sub") {
                echo $number1 . "-" . $number2 . "=" . ($number1 - $number2);
            } else if ($toanhang == "multi") {
                echo $number1 . "X" . $number2 . "=" . ($number1 * $number2);
            } else echo $number1 . "/" . $number2 . "=" . ($number1 / $number2);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
</body>

</html>