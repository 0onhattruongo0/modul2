<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function taomang($size)
    {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = rand(10, 90);
        }
        return $arr;
    }
    $arr = taomang(10);


    echo min($arr);
    ?>
</body>

</html>