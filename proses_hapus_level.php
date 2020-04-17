<?php

include 'db.php';
$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('level', ['id_level' => $id]);

if( $delete > 0) {
    echo "Berhasil menghapus data!";
    header('Location:level.php');
} else {
    echo "Gagal menghapus data".mysqli_error($db->connect());
}