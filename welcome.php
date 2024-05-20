<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>

    <?php
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "<h1>Selamat Datang, " . $name . "!</h1>";
    } else {
        echo "<h1>Selamat Datang!</h1>";
    }
    ?>
    <img src="love.png" alt="welcome">

</body>
</html>
