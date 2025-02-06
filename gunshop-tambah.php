<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $senjata = $_POST["senjata"];
    $tanggal = $_POST["tanggal"];

    $sql = "INSERT INTO gunshop (nama, NIK, senjata, tanggal) VALUES (?, ?, ?, ?)";
    
    $row = $koneksi->execute_query($sql, [$nama, $nik, $senjata, $tanggal]);

    header("location:gunshop.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="isi">
        <form class="login" action="" method="post">
            <div class="form-item">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-item">
                <label for="nik">NIK</label>
                <input type="number" name="nik" id="nik" required>
            </div>
            <div class="form-item">
                <label for="senjata">Senjata</label>
                <select name="senjata">
                    <option value="Glock-17">Glock-17</option>
                    <option value="Thompson">Thompson</option>
                    <option value="AK-47">AK-47</option>
                </select>
            </div>
            <div>
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>