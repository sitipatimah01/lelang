<?php

include 'db.php';

$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$tgl=$_POST['tgl'];
$harga_awal=$_POST['harga_awal'];
$deskripsi_barang=$_POST['deskripsi_barang'];

$db = new Database();
$update = $db->update('barang', [
    'nama_barang'  => $nama_barang,
    'tgl'    => $tgl,
    'harga_awal'      => $harga_awal,
    'deskripsi_barang' => $deskripsi_barang

], ['id_barang' => $id_barang]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: barang.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}