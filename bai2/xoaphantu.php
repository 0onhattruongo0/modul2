<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function Array1($size)
    {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = rand(10, 90);
        }
        return $arr;
    }
    function xoaphantu($arr, $value)
    {
        $k = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $value) {
                array_slice($arr, $i, 1);
                array_push($arr, 0);
                $i--;
                $k++;
            }
        }

        if ($k == 0) {
            echo "ko có số $value nào trùng <br/>";
        }
        print_r($arr);
    }

    $arr = Array1(20);
    print_r($arr);
    echo "<br/>";
    $value = 65;
    xoaphantu($arr, $value);



    ?>
</body>

</html>