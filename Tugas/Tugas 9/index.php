<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 9</title>
</head>
<body>
    <?php 

        define("PAJAK", 0.1);
        $harga = [
            150000, 100000, 50000
        ];
        $jumlah = 2;
        $total = $harga[0] * $jumlah;
        $total_pajak = $total * PAJAK;
        $total_bayar = $total + $total_pajak;

        echo "<h1>Perhitungan Total Pembelian (Dengan Array)</h1>";
        echo "______________________________________________________________________________<br>";
        echo "Nama Barang: Keyboard<br>";
        echo "Harga Satuan: ".$harga[0] . "<br>";
        echo "Jumlah Beli: ".$jumlah . "<br>";
        echo "Total Harga (Sebelum Pajak): ".$total."<br>";
        echo "Pajak(10%): ".$total_pajak."<br>";
        echo "<b>Total Bayar: ".$total_bayar."</b>";
    ?>
    
</body>
</html>