<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: 12px; /* Atur ukuran font sesuai kebutuhan */
        }
    </style>
</head>
<body>

    <?php
    
    $name = $email = "";
    $nameErr = $emailErr = "";

    /** kode*/
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;
        
        if (empty($_POST["u"])) {
            $nameErr = "masukkan Username";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $emailErr = "masukkan Password";
        } else {
            $email = bersihkan_input($_POST["p"]);
        }
        // Jika tidak ada kesalahan, diarahkan ke halaman welcome.php
        if ($isValid) {
            header("Location: welcome.php?name=" . urlencode($name));
            exit();
        }
    }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username : <input type="text" name="u">
        <span class = "error">* <?php echo $nameErr;?></span>
        <br><br>
        Password : <input type="password" name="p">
        <span class = "error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value = "Login">
    </form>
    
</body>
</html>