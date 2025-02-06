<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM gunshop WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $senjata = $_POST["senjata"];
    $tanggal = $_POST["tanggal"];
    $id = $_GET["id"];
    // $sql = "INSERT INTO barang (nama, stok, status) values (?, ?, ?)";
    $sql = "UPDATE gunshop SET nama=?, NIK=?, senjata=?, tanggal=? WHERE id=?";
    $row = $koneksi->execute_query($sql, [$nama, $nik, $senjata, $tanggal, $id]);
    header("location:gunshop.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1 style="font-size:large;">Edit Barang</h1>
    <form action="" method="post">
            <div class="form-item">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?=$row['nama']?>">
            </div>
        <div class="form-item">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik" value="<?=$row['NIK']?>">
        </div>
        <div class="form-item">
            <label for="senjata">Senjata</label>
            <select name="senjata" id="senjata">
                <!-- +- <option value="" disabled selected>Pilih status barang</option>→ -->
                <option value="Glock-17" <?=($row['senjata'] = 'Glock-17')?'selected':''?> >Glock-17</option>
                <option value="Thompson" <?=($row['senjata'] = 'Thompson')? 'selected': ''?> >Thompson</option:>
                <option value="AK-47" <?=($row['senjata'] = 'AK-47')? 'selected': ''?> >AK-47</option:>
            </select>
        </div>
        <div class="form-item">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="<?=$row['tanggal']?>">
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="gunshop.php">Kembali</a>
</body>
</html>