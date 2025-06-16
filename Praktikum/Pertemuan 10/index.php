<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Pertemuan 10</title>
</head>
<body>
    <form method="post">
        <label for ="nama" >Nama: </label>
        <input type="text" name="nama"><br>
        <label for ="email">Email: </label>
        <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php
         
        $var_nama = $_POST['nama'] ?? '';
        $var_email = $_POST['email'] ?? '';

        echo "<h1>Percabangan dalam PHP</h1>";
        echo "<h2>If & Else If</h2>";
        $nilai = 75;
        if($nilai >= 80){
            echo "Nilai A";
        } elseif($nilai >= 70){
            echo "Nilai B";
        } else{
            echo "Nilai C";
        }

        echo "<h2>If dua kondisi</h2>";
        $umur = 20;
        $ktp = true;
        if($umur >= 17 && $ktp){
            echo "Boleh Memilih";
        }
        echo "<h2>Kondisi if untuk validasi inputan pengguna</h2>";
        if(!empty($_POST['nama']) && !empty($_POST['email'])){
            echo "Nama: " .htmlspecialchars($_POST['nama']);
            echo "<br>Email: " .htmlspecialchars($_POST['email']);
        } else{
            echo "Nama dan Email tidak boleh kosong!";
        }
    ?>

    <br><input type="button" value="Percobaan Praktikum" onclick="window.location.href='latihan_nilai.php'">
</body>
</html>