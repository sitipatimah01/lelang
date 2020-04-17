<?php

include 'db.php';
$id_petugas = $_POST['id_petugas'];
$id_barang = $_POST['id_barang'];
$tgl_lelang = $_POST['tgl_lelang'];
$harga_akhir = $_POST['harga_akhir'];
$status = $_POST['status'];

$db = new Database();
$insert = $db->insert('lelang', [
    'id_lelang' => '',
    'id_petugas' => $id_petugas,
    'id_barang' => $id_barang,
    'tgl_lelang'      => $tgl_lelang,
    'harga_akhir' => $harga_akhir,
    'status' => $status
]);

if( $insert > 0) {
    echo "Berhasil menambahkan data!";
    header('location: lelang.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}