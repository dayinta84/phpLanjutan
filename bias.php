<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array JSON</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        table {
            width: 40%;
            border-collapse: collapse;
            
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #00FF00;
            text-align: center;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        
    </style>
</head>
<body>
    <?php
    // Membuat array dengan 15 data (nama dan umur)
    $people = array(
        array("nama" => "Taeil", "umur" => 30),
        array("nama" => "Johnny", "umur" => 29),
        array("nama" => "Taeyong", "umur" => 29),
        array("nama" => "Yuta", "umur" => 29),
        array("nama" => "Doyoung", "umur" => 28),
        array("nama" => "Jaehyun", "umur" => 27),
        array("nama" => "Winwin", "umur" => 27),
        array("nama" => "Jungwoo", "umur" => 26),
        array("nama" => "Mark", "umur" => 25),
        array("nama" => "Haechan", "umur" => 24),
        array("nama" => "Renjun", "umur" => 24),
        array("nama" => "Jeno", "umur" => 24),
        array("nama" => "Jaemin", "umur" => 24),
        array("nama" => "Chenle", "umur" => 23),
        array("nama" => "Jisung", "umur" => 22)
    );

    // Mengonversi array ke format JSON
    $json_data = json_encode($people, JSON_PRETTY_PRINT);

    // Menampilkan tabel HTML
    echo "<h2>NCT 127 & NCT Dream</h2>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>Umur</th></tr>";
    foreach ($people as $person) {
        echo "<tr><td>" . htmlspecialchars($person['nama']) . "</td><td>" . htmlspecialchars($person['umur']) . "</td></tr>";
    }
    echo "</table>";

    ?>
</body>
</html>
