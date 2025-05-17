<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 4</title>
</head>
<body>
    <?php 
        echo "<h1>Nyobain Nomor 4</h1>";
        echo "<p>Gunakan ternary operator untuk menentukan apakah angka adalah genap atau ganjil.</p>";
        
        $angka = 3;
        $status = ($angka % 2 == 0)? "Genap" : "Ganjil";
        echo "Angka ".$angka." adalah ".$status;
        ?>
</body>
</html>