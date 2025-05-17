<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyobain Percabangan</title>
</head>
<body>
    <?php
    echo "Nyobain Switch Case<br>";
    $hari = "Senin";

    switch ($hari) {
        case "Senin":
            echo "Hari Pertama Kuliah!<br>";
            break;
        case "Selasa":
            echo "Hari Kedua Kuliah!<br>";
            break;
        case "Rabu":
            echo "Hari Ketiga Kuliah!<br>";
            break;
        case "Kamis":
            echo "Hari Keempat Kuliah!<br>";
            break;
        case "Jumat":
            echo "Solat Jumat!<br>";
            break;
        case "Sabtu":
            echo "Gawe bikin aplikasi!<br>";
            break;
        case "Minggu":
            echo "Gaada istirahat bos!<br>";
            break;
        default:
            echo "Hari biasa!<br>";
    }

    echo "<br>Nyobain For Loop<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-$i<br>";
    }

    $buah = ["Apel", "Jeruk", "Mangga",];
    for ($j = 0; $j < count($buah); $j++) {
        echo $buah[$j]."<br>";
    }
    
    echo "<br>Nyobain While Loop<br>";
    $nilai = 1;
    while ($nilai <= 5){
        echo "Nilai: ". $nilai . "<br>";
        $nilai++;
    }

    echo "<br>Nyobain Foreach<br>";
    $mahasiswa = [
        "10001" => "Andi",
        "10002" => "Budi",
        "10003" => "Citra"
    ];
    
    foreach ($mahasiswa as $nim => $nama){
        echo "NIM: " . $nim . ", Nama: " . $nama . "<br>";
    }

    echo "<br>Nyobain Ternary Operator<br>";
    $umur = 18;
    $status = ($umur >= 17) ? "Dewasa" : "Anak-anak";

    echo $status;

    echo "<br>Nyobain Fungsi include dan Require<br>";
    include 'header.php';
    require 'menu.php';
    ?>
</body>
</html>