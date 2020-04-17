<?php

$nama_host='localhost';
$username='root';
$password='';
$nama_db='lelang';

$koneksi= mysqli_connect($nama_host,$username,$password,$nama_db);

if(mysqli_connect_errno()){
    echo "terjadi kesalahan pada database.<br>".mysqli_connect_error($koneksi);
}
?>
