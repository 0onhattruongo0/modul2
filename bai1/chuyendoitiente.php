<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="number">
        <select name="tiengoc" id="">
            <option value="VNĐ">VNĐ</option>
            <option value="USD">USD</option>
        </select>
        <select name="tiendoi" id="">
            <option value="USD">USD</option>
            <option value="VNĐ">VNĐ</option>
        </select>
        <button type="submit">Chuyển đổi</button>
    </form>
    <?php
    if (isset($_GET["number"])) {
        if (($_GET["tiengoc"] == "VNĐ") & ($_GET["tiendoi"] == "USD")) {
            $tiendoidc = $_GET["number"] / 23000;
            echo $tiendoidc;
        }
        if (($_GET["tiengoc"] == "USD") & ($_GET["tiendoi"] == "VNĐ")) {
            echo "Tiền đổi đc là:" . ($_GET["number"] * 23000);
        }
    }
    ?>
</body>

</html>