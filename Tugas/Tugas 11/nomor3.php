<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 3</title>
</head>
<body>
    <?php 
        echo "<h1>Nyobain Nomor 3</h1>";
        echo "<p>Buat array daftar nama hewan dan tampilkan menggunakan foreach.</p>";

        $hewan = [
            "Karnivora" => "Harimau",
            "Herbivora" => "Kuda",
            "Omnivora" => "Beruang"
        ];

        foreach ($hewan as $jenis => $nama) {
            echo "Jenis: ".$jenis.", Nama: ".$nama."<br>";
        }
    ?>
</body>
</html>