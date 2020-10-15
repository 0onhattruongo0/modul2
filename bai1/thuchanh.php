<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .login {
            margin: 0px;
            padding: 10px;
            width: 260px;
            height: 180px;
            border: solid 1px;

        }

        .login input {
            margin: 5px;
            padding: 5px;

        }
    </style>
</head>

<body>
    <form action="" method="GET">
        <div class="login">
            <h2>login</h2>
            <input type="text" name="usename" size="30" placeholder="usename">
            <input type="password" name="password" size="30" placeholder="password">
            <input type="submit" value="Sign in">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $usename1 = $_GET["usename"];
        $password1 = $_GET["password"];

        if ($usename1 === "admin" && $password1 === "admin") {
            echo "<h2>Welcome <span style='color:red'>" . $usename1 . "</span> to website</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
    ?>

</body>

</html>