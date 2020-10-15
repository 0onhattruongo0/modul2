<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Demdoituong
    {
        private $name;
        public static $count = 0;
        public function __construct($name)
        {
            $this->name = $name;
            self::$count++;
        }
        public function __toString()
        {
            return 'Đối tượng:' . $this->name;
        }
    }
    echo "Có:" . Demdoituong::$count . "<br/>";
    $app1 = new Demdoituong("Apple1");
    echo "Có:" . Demdoituong::$count . "<br/>";
    echo $app1;

    ?>
</body>

</html>