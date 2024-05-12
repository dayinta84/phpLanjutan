<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nama : <input type="text" name="nama"> <br>
        E-mail : <input type="" name="email"> <br>
        Komentar : <textarea name="constant" id="" cols="40" rows="5"></textarea> <br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>

    <?php

    $name = $email = $comment ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $comment = $_POST["constant"];
        echo ("Nama : ".$name."<br>");
        echo ("Email : ".$email."<br>");
        echo ("Komentar : ".$comment."<br>");
        echo ("<hr>");

    }
    
    
    ?>
</body>
</html>