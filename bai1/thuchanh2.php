<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid;
        }
    </style>
</head>

<body>
    <table border="0">
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>

        </tr>

        <?php
        $customerlist = array(
            "1" => array(
                "ten" => "Mai Văn Hoàn",
                "ngày sinh" => "1983-08-20",
                "địa chỉ" => "Hà Nội"
            ),
            "2" => array(
                "ten" => "Nguyễn Văn Nam",
                "ngày sinh" => "1983-08-23",
                "địa chỉ" => "Bắc Giang"
            ),
            "3" => array(
                "ten" => "Nguyễn Thái Hòa",
                "ngày sinh" => "1983-08-25",
                "địa chỉ" => "Hà Nội"
            )
        );


        foreach ($customerlist as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value["ten"] . "</td>";
            echo "<td>" . $value["ngày sinh"] . "</td>";
            echo "<td>" . $value["địa chỉ"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>