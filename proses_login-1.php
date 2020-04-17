<?php

include 'koneksi.php';

session_start();

$username  =$_POST['username'];
$password  =$_POST['password'];


$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username' AND password='$password' ");
$cek =mysqli_num_rows($login);

if ($cek > 0 ){
    $data = mysqli_fetch_assoc($login);

    $user = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $password_user = $user['password'];

if ($data['level'] =="administrator" ){

    $_SESSION['username'] = $username;
    $_SESSION['level'] ="administrator";
    header('location: admin.php');

}else if ($data['level'] =="petugas" ){
    $_SESSION['username'] = $username;
    $_SESSION['level'] ="petugas";
    header('location: halaman_petugas.php');

}

}else{
    echo "gagalllll";
}


