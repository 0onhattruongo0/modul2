<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class Application1
  {
    private static $instance;

    public static function getInstance()
    {
      if (self::$instance === null) {
        self::$instance = new Application1();
        echo "alo";
      }
      return self::$instance;
    }
  }

  $app1 = Application1::getInstance();
  $app2 = Application1::getInstance();
  ?>
</body>

</html>