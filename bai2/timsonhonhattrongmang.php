<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array(3, 5, 7, 2, 9);
    function min1($arr)
    {
        $min = $arr[0];
        $index = 0;
        for ($i = 1; $i < count($arr); $i++) {
            if ($min > $arr[$i]) {
                $min = $arr[$i];
                $index = $i;
            }
        }

        echo "Số nhỏ nhất là:$min và ở vị trí  $index";
    }
    min1($arr);
    ?>
</body>

</html>