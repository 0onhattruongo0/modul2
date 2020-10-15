<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Size: <input type="text" name="size">
        <button type="submit">chọn size</button>
    </form>
    <?php
    $arr = [];
    if (isset($_POST["size"])) {
        $size = $_POST["size"];

        try {
            if ($size < 0 || $size > 100) {
                throw new Exception("Không hợp lệ");
            }
            for ($i = 0; $i < $size; $i++) {
                $arr[$i] = rand(10, 90);
            }
            print_r($arr);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    ?>
</body>

</html>