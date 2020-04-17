<?php

include 'db.php';
$id_user = $_POST['id_user'];
$id_lelang = $_POST['id_lelang'];
$penawaran_harga = $_POST['penawaran_harga'];

$db = new Database();
$insert = $db->insert('history_lelang', [
    'id_history_lelang' => '',
    'id_user' => $id_user,
    'id_lelang' => $id_lelang,
    'penawaran_harga'      => $penawaran_harga
    
]);

if( $insert > 0) {
    echo "Berhasil menambahkan data!";
    header('location: history_lelang.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}