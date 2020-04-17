<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('lelang', ['id_lelang' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location: lelang.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}