<?php

include 'db.php';
$id_level = $_POST['id_level'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];

$db = new Database();
$insert = $db->insert('petugas', [
    'id_petugas' => '',
    'id_level' => $id_level,
    'nama_petugas'      => $nama_petugas,
    'username'    => $username,
    'password' => $password
]);

if( $insert > 0) {
    echo "Berhasil menambahkan data!";
    header('location: petugas.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}