<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Upload File</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
        <p>
            <label>Pilih gambar yang akan di upload : </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1">
        </p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //cek apakah ada kiriman data menggunakan method post
        if (isset($_POST["submit"])) {
            //cek apakah file berupa gambar
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                echo "<p class='message'>File berupa citra/gambar - " . $check["mime"] . ".</p>";
                $uploadOk = 1;
            } else { //simpan dalam folder gambar
                echo "<p class='message'>File bukan gambar.</p>";
                $uploadOk = 0;
            }
        }   

        //deteksi apakah ada file dengan nama yang sama
        if (file_exists($target_file)) {
            echo "<p class='message'>Sorry, file already exists.</p>";
            $uploadOk = 0;
        }

        //check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "<p class='message'>Sorry, file anda terlalu besar.</p>";
            $uploadOk = 0;
        }

        //filter format
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "<p class='message'>Sorry, hanya file JPG, PNG, JPEG & GIF.</p>";
            $uploadOk = 0;
        }
        //check if $uploadOk telah selesai dengan kriteria
        if ($uploadOk == 0) {
            echo "<p class='message'>Sorry, file anda gagal upload.</p>";
        } else {
            //proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "<p class='message'>file " . htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil upload.</p>";
            } else {
                echo "<p class='message'>Sorry, ada error saat upload.</p>";
            }
        }
    }
    
    ?>
</body>
</html>