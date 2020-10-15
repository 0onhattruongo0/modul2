<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Fan
    {
        const SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private $speed;
        private $on;
        private $radius;
        private $color;
        function __construct()
        {
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }
        function setSpeed($speed)
        {
            $this->speed = $speed;
        }
        function getSpeed()
        {
            return $this->speed;
        }
        function setOn()
        {
            return $this->on = true;
        }
        function setRadius($radius)
        {
            $this->radius = $radius;
        }
        function getRadius()
        {
            return $this->radius;
        }
        function setColor($color)
        {
            $this->color = $color;
        }
        function getColor()
        {
            return $this->color;
        }
        function toString()
        {
            if ($this->on) {
                return "Speed: " . $this->speed . ". Màu: " . $this->color . ". Bán kính: " . $this->radius . ". Fan is: on";
            } else return "Speed: " . $this->speed . " Màu: " . $this->color . ". Bán kính: " . $this->radius . ". Fan is: off";
        }
    }
    $fan1 = new Fan();
    $fan2 = new Fan();
    $fan1->setSpeed($fan1::FAST);
    $fan1->setRadius(10);
    $fan1->setColor("yellow");
    $fan1->setOn();
    echo $fan1->toString();
    echo "<br>";
    $fan2->setSpeed($fan1::MEDIUM);
    $fan2->setRadius(5);
    $fan2->setColor("blue");
    // $fan1->setOn();
    echo $fan2->toString();
    ?>
</body>

</html>