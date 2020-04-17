<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('barang', ['id_barang' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location:barang.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}