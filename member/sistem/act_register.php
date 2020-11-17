<?php

if (isset($_POST['nickname']) && $_POST['nickname']) {
    // memasukan file koneksi ke database
    require_once '../../sistem/koneksi.php';

    // menyimpan variable yang dikirim Form
    $nickname = $_POST['nickname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // cek nilai variable

    if (empty($nickname)) {
        header('location: ../register.php?error=' .base64_encode('nama tidak boleh kosong'));   
    }

    if (empty($username)) {
        header('location: ../register.php?error=' .base64_encode('Username tidak boleh kosong'));   
    }

    if (empty($password)) {
        header('location: ../register.php?error=' .base64_encode('Password tidak boleh kosong'));   
    }

    // validasi apakah password dengan repassword sama
    if ($password != $repassword) { // jika tidak sama
        header('location: ../register.php?error=' .base64_encode('Password tidak sama'));   
    }

    // encryption dengan md5
    $password = md5($password);

    $level = 'member'; // default, 

    // SQL Insert
    $sql = "INSERT INTO member (nama, id_member, alamat, password) VALUES ('$nickname', '$username', '$level', '$password')";

    $insert = $koneksi->query($sql);
    // jika gagal
    if (! $insert) {
        echo "<script>alert('".$koneksi->error."'); window.location.href = '../register.php';</script>";
    } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = '../login.php';</script>";
    }
}
?>