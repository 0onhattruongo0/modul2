<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 40%;
            height: auto;
            background-color: yellow;
            display: flex;
            margin: 30px;
            flex-wrap: wrap;

        }

        div {
            padding: 20px;
            border: 1px solid;
            margin-left: 20px;
            border-radius: 10px;
            background-color: red;
            margin-bottom: 20px;

        }
    </style>
</head>

<body>
    <?php
    for ($i = 2; $i < 10; $i++) {
        echo "<div>";
        for ($j = 0; $j <= 10; $j++) {
            echo "$i" . "x" . "$j=" . $i * $j . "<br/>";
        }
        echo "</div>";
    }
    ?>
</body>

</html>