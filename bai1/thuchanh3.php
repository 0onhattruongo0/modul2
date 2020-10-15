<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h2>Từ điển Anh-Việt</h2>
    <form action="" method="post">
        <input type="text" name="tudien" placeholder="Nhập từ cần tìm">
        <input type="submit" id="submit">
    </form>
    <?php
    $dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "vở", "computer" => "máy tính");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["tudien"];
        $flag = 0;
        foreach ($dictionary as $word1 => $description1) {
            if ($word1 == $searchword) {
                echo "Từ:" . $word1 . "<br> Nghĩa của từ:" . $description1;
                echo "<br/>";
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "Không tìm thấy từ cần tra.";
        }
    }


    ?>
</body>

</html>