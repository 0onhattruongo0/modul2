<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Size1: <input type="number" name="size1">
        Size2: <input type="number" name="size2">
        <button type="submit">Gộp mảng</button>
    </form>

    <?php
    function taomang($size)
    {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = rand(10, 100);
            // echo $arr[$i] . " ";
        }
        return $arr;
    }
    if (isset($_GET["size1"]) && isset($_GET["size2"])) {
        $size1 = $_GET["size1"];
        $size2 = $_GET["size2"];
        $arr1 = taomang($size1);
        $arr2 = taomang($size2);
        $arr3 = [];
        for ($i = 0; $i < count($arr1); $i++) {
            array_push($arr3, $arr1[$i]);
        }
        for ($j = 0; $j < count($arr2); $j++) {
            array_push($arr3, $arr2[$j]);
        }
        var_dump($arr1);
        echo "<br/>";
        print_r($arr2);
        echo "<br/>";
        print_r($arr3);
    }

    ?>
</body>

</html>