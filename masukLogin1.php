<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location : login1.php");
        exit();
    }
    ?>

    <p>
        Selamat datang, <?php echo htmlspecialchars($_SESSION['user_id']); ?>!
    </p>
    <img src="love.png" alt="welcome"><br>
    <a href="logout1.php">Logout</a>
</body>
</html>