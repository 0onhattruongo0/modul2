<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = [];
    for ($i = 0; $i < 9; $i++) {

        for ($j = 0; $j < 9; $j++) {
            $arr[$i][$j] = rand(10, 90);
            echo $arr[$i][$j] . " ";
        }
        echo "<br/>";
    }

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i == $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    echo $sum;
    ?>
</body>

</html>