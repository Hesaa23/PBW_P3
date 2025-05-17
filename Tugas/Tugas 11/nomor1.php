<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>
<body>
    <?php
        echo "<h1>Nyobain Nomor 1</h1>";
        echo "<p>Membuat program menggunakan switch untuk menentukan jenis kendaraan berdasarkan jumlah roda</p>";
        $roda = "4";
        switch ($roda) {
            case "2":
                echo "Motor";
                break;
            case "4":
                echo "Mobil";
                break;
            default:
                echo "Tidak ada kendaraan yang sesuai";
        }
    ?>
</body>
</html>