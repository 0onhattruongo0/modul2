<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array(
        array(3, 5, 7, 9, 2),
        array(5, 4, 6, 3, 5),
        array(5, 7, 9, 12, 10)

    );
    function findmax($arr)
    {
        $Max = $arr[0][0];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($Max < $arr[$i][$j]) {
                    $Max = $arr[$i][$j];
                }
            }
        }
        echo $Max;
    }
    findmax($arr);
    ?>
</body>

</html>