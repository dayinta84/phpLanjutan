<?php
//mengatur identitas
$nama = "Dayinta Ayu Fajrin";
$email = "dayintaayu36@gmail.com";

//menyimpan identitas kedalam cookies selama 1 jam
setcookie ("nama", $nama, time()+3600);
setcookie ("email", $email, time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
</head>
<body>
    <h1>IDENTITAS DIRI</h1>

    <?php
    //cek apakah cookies sudah tersedia
    if (isset($_COOKIE['nama']) && isset($_COOKIE['email'])) {
        $nama = $_COOKIE['nama'];
        $email = $_COOKIE['email'];
        echo "<p>Nama : $nama</p>";
        echo "<p>Email : $email</p>";
    } else {
        echo "<p>Identitas Anda tidak tersedia</p>";
    }
    ?>
</body>
</html>