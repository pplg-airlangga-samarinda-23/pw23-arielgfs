<?php 

require 'koneksi.php';

$sql = "SELECT * FROM gunshop";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunshop</title>
</head>
<body>
    <h1>Halaman Gunshop</h1>

    <a href="gunshop-tambah.php">Tambah Data</a>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Senjata</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["NIK"] ?></td>
                    <td><?= $row["senjata"] ?></td>
                    <td><?= $row["tanggal"] ?></td>
                    <td>
                        <a href="gunshop-edit.php?id=<?=$row['id']?>">?Edit</a>
                        <a href="gunshop-hapus.php?id=<?=$row['id']?>">?Hapus</a>
                    </td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>