<?php

include 'db.php';

$id_user=$_POST['id_user'];
$nama_lengkap=$_POST['nama_lengkap'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$db = new Database();
$update = $db->update('masyarakat', [
    'nama_lengkap'  => $nama_lengkap,
    'username'    => $username,
    'password'      => $password,
    'telp' => $telp

], ['id_user' => $id_user]);

if( $update > 0) {
    echo "Berhasil mengubah data!";
    header('location: masyarakat.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}