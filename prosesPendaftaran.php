<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pendaftaran</title>
</head>
<body>
    Selamat Datang <b> <?php echo $_POST["nama"]; ?> </b> <br>
    NIM : <?php echo $_POST["nim"]; ?> <br>
    Email : <?php echo $_POST["email"]; ?> <br>
    Tempat, tanggal lahir : <?php echo $_POST["tempat"]; ?> , <?php echo $_POST["tanggal"]; ?> <br>
    Alamat : <?php echo $_POST["alamat"]; ?> <br>
    Jenis Kelamin : <?php echo $_POST["gender"]; ?> <br>
</body>
</html>