<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('history_lelang', ['id_history_lelang' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location: history_lelang.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}