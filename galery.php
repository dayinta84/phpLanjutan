<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .galeri img {
            width: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="galeri">
        <?php
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="' . basename($filename) . '">';
            }
        }
        ?>
    </div>
    
</body>
</html>