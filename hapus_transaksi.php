<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('contoh', ['id_transaksi' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location:contoh2.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}