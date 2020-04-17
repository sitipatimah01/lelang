<?php

include 'db.php';

$id_petugas=$_POST['id_petugas'];
$id_level=$_POST['id_level'];
$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];

$db = new Database();
$update = $db->update('petugas', [
    'id_level'  => $id_level,
    'nama_petugas' => $nama_petugas,
    'username'    => $username,
    'password'      => $password

], ['id_petugas' => $id_petugas]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: petugas.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}