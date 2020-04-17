<?php

include 'db.php';
$nama_barang = $_POST['nama_barang'];
$tgl = $_POST['tgl'];
$harga_awal = $_POST['harga_awal'];
$deskripsi_barang = $_POST['deskripsi_barang'];

$db = new Database();
$insert = $db->insert('barang', [
    'id_barang' => '',
    'nama_barang'      => $nama_barang,
    'tgl'    => $tgl,
    'harga_awal' => $harga_awal,
    'deskripsi_barang' => $deskripsi_barang
]);

if( $insert > 0) {
    echo "Berhasil menambahkan data!";
    header('location: barang.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}