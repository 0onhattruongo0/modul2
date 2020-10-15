<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="tienbandau">
        <input type="text" name="laisuatnam">
        <input type="text" name="sonamdautu">
        <input type="submit" value="tính">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $tiengoc = $_GET["tienbandau"];
        $laisuatnam = $_GET["laisuatnam"];
        $sonamdautu = $_GET["sonamdautu"];
        $giatrituonglai = ($tiengoc + ($tiengoc * $laisuatnam)) * $sonamdautu;
        echo $giatrituonglai;
    }

    ?>
</body>

</html>