4:08
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $arr = [10, 4, 6, 7, 7, 6, 0, 0, 0, 0];
    $value = 7;
    echo "Mảng trước khi xóa phần tử " . $value . " là: ";
    print_r($arr);
    echo "<br>";
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $value) {
            array_splice($arr, $i, 1);
            array_push($arr, 0);
            $i--;
        }
    }
    echo "Mảng sau khi xóa phần tử " . $value . " là: ";
    print_r($arr);
    ?>
</body>



</html>