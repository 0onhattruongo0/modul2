<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Rectangle
    {
        public $weight;
        public $height;
        public function __construct($weight, $height)
        {
            $this->weight = $weight;
            $this->height = $height;
        }
        function getArea()
        {
            return $this->weight * $this->height;
        }
        function getPerimeter()
        {
            return ($this->weight + $this->height) * 2;
        }
        function display()
        {
            return "Rectangle{weight= $this->weight height= $this->height }";
        }
    }
    $weight  = 10;
    $height = 20;
    $rectangle = new Rectangle($weight, $height);
    echo $rectangle->weight; // 0utput: 10
    echo $rectangle->height; // 0utput: 20

    $rectangle->height = 30;
    $rectangle->weight = 20;

    echo $rectangle->height; // 0utput: 30
    echo $rectangle->weight; // 0utput: 20
    echo $rectangle->getPerimeter(); // 0utput: 100
    echo $rectangle->getArea(); // Output: 600
    echo ("Your Rectangle" . $rectangle->display());
    ?>
</body>

</html>