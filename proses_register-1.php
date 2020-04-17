<?php
include "koneksi.php";

$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$email          = $_POST['email'];
$level          = $_POST['level'];

$password_dihash = password_hash($password, PASSWORD_DEFAULT);
$query = mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$username','$password','$email','$level')");

if ($query){
    echo "Registrasi berhasil silahkan login <a href='login.php'>disini</a>";
    header('Location:login.php');

} else{
    echo "Registrasi gagal...".mysqli_error($koneksi);
}

?>