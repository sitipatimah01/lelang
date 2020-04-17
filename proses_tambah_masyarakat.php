<?php

include 'db.php';
$nama_pelelang = $_POST['nama_pelelang'];
$nama_barang = $_POST['nama_barang'];
$harga_tawar = $_POST['harga_tawar'];
$jumlah_barang = $_POST['jumlah_barang'];

$db = new Database();
$insert = $db->insert('transaksi', [
    'id_pelelang' => '',
    'nama_pelelang'      => $nama_pelelang,
    'nama_barang'    => $nama_barang,
    'harga_tawar' => $harga_tawar,
    'jumlah_barang' => $jumlah_barang
]);

if( $insert > 0) {
    echo "Berhasil menambahkan data!";
    header('location: transaksi.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}