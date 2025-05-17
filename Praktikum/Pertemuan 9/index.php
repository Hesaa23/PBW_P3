<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7</title>
</head>
<body>
    <?php 
        echo "<h1>Halo, selamat datang di dunia PHP!</h1>";
        echo "<br>";
        
        echo "<h2>Ini adalah contoh penggunaan variabel PHP</h2>";
        $nama = "Budi";
        $umur = 20;

        // Menampilkan nilai variabel
        echo "Nama : " . $nama . "<br>";
        echo "Umur : " . $umur . " tahun<br>";
    ?>
    <?php
        echo "<h2>Ini adalah Konstanta</h2><br>";
        define("site", "unsika.ac.id");
        define("version", "1.0");

        echo "Selamat datang di " . site . "<br>";
        echo "Versi Sistem " . version . "<br>";
    ?>
    <?php
        echo "<h2>Ini adalah contoh tipe data PHP</h2>";
        echo "<h3>ini adalah contoh string</h3>";
        $nama = "Andi";
        echo "Nama saya adalah " . $nama . "<br>";

        echo "<h3>ini adalah contoh integer</h3>";
        $umur = 25;
        echo "Umur saya adalah " . $umur . " tahun<br>";
        echo "<h3>ini adalah contoh float</h3>";
        $berat = 55.5;
        echo "Berat badan saya " . $berat . " kg<br>";

        echo "<h3>ini adalah contoh boolean</h3>";
        $isLogin = true;
        if ($isLogin) {
            echo "Anda sudah login<br>";
        } else {
            echo "Anda belum login<br>";
        }

        echo "<h3>ini adalah contoh array</h3>";
        $buah = array("apel", "jeruk", "mangga");
        echo $buah[1];

        echo "<h3>ini adalah contoh object</h3>";
        class Mahasiswa {
            public $nama;
            public function sapa(){
                return "Halo, saya $this->nama";
            }
        }
        $mhs = new Mahasiswa();
        $mhs->nama = "Harold";
        echo $mhs->sapa();
        
        echo "<h3>ini adalah contoh null</h3>";
        $data = null;
        var_dump($data);
    ?>
</body>
</html>