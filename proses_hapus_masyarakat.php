<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('masyarakat', ['id_user' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location:masyarakat.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}