<?php
include 'koneksi.php';

$query_total_barang = "SELECT COUNT(AK-47) AS senjata FROM gunshop";
$result = $koneksi->query($query_total_barang);

if ($result) {
    $row = $result->fetch_assoc();
    $total1 = $row['total_barang'];
} else {
    $total_barang = 0; 
}

echo json_encode($data1);
?>
