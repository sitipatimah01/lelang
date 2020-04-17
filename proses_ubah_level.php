<?php

include 'db.php';

$id_level=$_POST['id_level'];
$level=$_POST['level'];

$db = new Database();
$update = $db->update('level', [
    'level'  => $level

], ['id_level' => $id_level]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: level.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}