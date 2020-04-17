<?php

include 'db.php';

$id_history_lelang = $_POST['id_history_lelang'];
$id_user = $_POST['id_user'];
$id_lelang = $_POST['id_lelang'];
$penawaran_harga = $_POST['penawaran_harga'];

$db = new Database();
$update = $db->update('history_lelang', [
          'id_user' => $id_user,
          'id_lelang' => $id_lelang,
          'penawaran_harga'=> $penawaran_harga
          

], ['id_history_lelang' => $id_history_lelang]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: history_lelang.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}