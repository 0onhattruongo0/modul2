<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <select name="chon" id="">
            <option value="rectangle">Print the rectangle </option>
            <option value="squaretriangle">Print the square triangle </option>
            <option value="isoscelestriangle">Print isosceles triangle </option>

        </select>
        <button type="submit">Draw</button>


    </form>
    <?php
    if (isset($_GET["chon"])) {
        if ($_GET["chon"] == "rectangle") {
            for ($i = 0; $i < 3; $i++) {

                for ($j = 0; $j < 7; $j++) {
                    echo "*";
                }
                echo "<br/>";
            }
        }
        if ($_GET["chon"] == "squaretriangle") {
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br/>";
            }
        }
        if ($_GET["chon"] == "isoscelestriangle") {
            for ($i = 7; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br/>";
            }
        }
    }
    ?>


</body>


</html>