<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('petugas', ['id_petugas' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location:petugas.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}