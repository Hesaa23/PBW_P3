<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum</title>
</head>
<body>
    <form method="post">
        <label for="Nama">Nama: </label>
        <input type="text" name="nama"><br>
        <label for="Nilai">Nilai Ujian</label>
        <input type="number" name="nilai"><br>
        <input type="submit" value="Proses">
    </form>

    <?php 
        $var_nama = $_POST['nama'] ?? '';
        $var_nilai = $_POST['nilai'] ?? '';
        $predikat;

        if($var_nilai >= 85){
            $predikat = "A";
        } elseif($var_nilai <= 84 && $var_nilai >= 75){
            $predikat = "B";
        } elseif($var_nilai <= 74 && $var_nilai >= 65){
            $predikat = "C";
        } elseif($var_nilai <= 64 && $var_nilai >= 50){
            $predikat = "D";
        } elseif($var_nilai <= 49 && $var_nilai >= 0){
            $predikat = "E";
        } else{
            $predikat = "Nilai tidak valid";
        }

        if(!empty($_POST['nama']) && !empty($_POST['nilai'])){
            echo "Nama: " .htmlspecialchars($var_nama);
            echo "<br>Nilai: " .htmlspecialchars($var_nilai);
            echo "<br>Predikat: " .htmlspecialchars($predikat);
            echo "<br>Status: Lulus";
        } else{
            echo "Nama dan Nilai tidak boleh kosong!";
        }
    ?>
</body>
</html>