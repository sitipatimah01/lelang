<?php

include 'db.php';

$id_lelang = $_POST['id_lelang'];
$id_petugas = $_POST['id_petugas'];
$id_barang= $_POST['id_barang'];
$tgl_lelang= $_POST['tgl_lelang'];
$harga_akhir = $_POST['harga_akhir'];
$status = $_POST['status'];

$db = new Database();
$update = $db->update('lelang', [
          'id_petugas' => $id_petugas,
          'id_barang' => $id_barang,
          'tgl_lelang' => $tgl_lelang,
          'harga_akhir'=> $harga_akhir,
          'status' => $status
          

], ['id_lelang' => $id_lelang]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: lelang.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}