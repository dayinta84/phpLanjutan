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
            font-size: 12px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        header("Location: masukLogin1.php");
        exit();
    }

    $name = $password = "";
    $nameErr = $passwordErr = "";
    $errorMessage = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;

        try {
            if (empty($_POST["u"])) {
                $nameErr = "Masukkan Username";
                $isValid = false;
            } else {
                $name = bersihkan_input($_POST["u"]);
            }

            if (empty($_POST["p"])) {
                $passwordErr = "Masukkan Password";
                $isValid = false;
            } else {
                $password = bersihkan_input($_POST["p"]);
            }

            if ($isValid) {
                // Validasi kredensial
                $valid_username = "dayinnnn";
                $valid_password = "day135";

                if ($name === $valid_username && $password === $valid_password) {
                    $_SESSION['user_id'] = $name;
                    header("Location: masukLogin1.php");
                    exit();
                } else {
                    $passwordErr = "Username atau Password salah!";
                }
            }
        } catch (Exception $e) {
            $errorMessage = "Terjadi kesalahan: " . $e->getMessage();
        }
    }
    ?>

    <h2>Login</h2>
    <?php
    if (!empty($errorMessage)) {
        echo '<p class="error">' . $errorMessage . '</p>';
    }
    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>