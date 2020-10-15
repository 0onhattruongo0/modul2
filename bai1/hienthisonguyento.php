<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function KTSNT($i)
    {
        if ($i < 2) {
            return false;
        } else if ($i == 2) {
            return true;
        } else if ($i > 2) {
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    return false;
                }
            }
            return true;
        }
    }
    for ($i = 1; $i < 100; $i++) {
        if (KTSNT($i) == true) {
            echo $i . "<br/>";
        }
    }

    ?>
</body>

</html>