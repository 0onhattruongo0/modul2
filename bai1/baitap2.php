<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="product">
        <input type="submit" value="submit">
    </form>
    <?php
    $products = array(
        "áo" => array("gia" => "10000", "chietkhau" => "5"),
        "quan" => array("gia" => "15000", "chietkhau" => "3")
    );
    if (isset($_GET["product"])) {
        $product = $_GET["product"];
        $flag = 0;
        foreach ($products as $key => $value) {
            if ($key == $product) {
                $result = $value["gia"] * $value["chietkhau"] * 0.01;
                echo "Lượng chiết khấu:" . $result . '<br/>';
                echo "giá sau chiết khấu" . ($value["gia"] - $result);

                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "ko tồn tại sản phẩm";
        }
    }


    ?>
</body>

</html>