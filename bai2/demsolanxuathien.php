<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $chuoi = "nhattruong";
    $char = "n";
    $a = 0;
    for ($i = 0; $i < strlen($chuoi); $i++) {
        if ($char == $chuoi[$i]) {
            $a++;
        }
    }
    echo "Số lần xuất hiện là: $a";
    ?>
</body>

</html>