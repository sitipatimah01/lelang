<?php

include 'db.php';
$nama_lengkap =$_POST ['nama_lengkap'];
$nama_barang = $_POST['nama_barang'];
$harga_awal = $_POST['harga_awal'];
$harga_tawar = $_POST['harga_tawar'];

$db = new Database();
$insert = $db->insert('contoh', [
    'id_transaksi' => '',
    'nama_lengkap'      => $nama_lengkap,
    'nama_barang'      => $nama_barang,
    'harga_awal' => $harga_awal,
    'harga_tawar' => $harga_tawar
]);

if( $insert > 0) {
    echo "Halo <b>$nama_lengkap</b> ";
    echo "Anda telah telah melakukan proses lelang <b>$nama_barang</b> ";
    echo "dengan harga awal sebesar <b>$harga_awal</b> ";
    echo "dan anda melelang dengan harga <b>$harga_tawar</b> ";
    echo "</br>";
    echo "Terimakasih Telah berpartisipasi di Blessing Auction.";
    echo "</br>";
    echo "<a href='halaman_petugas.php'>back</a>";
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}