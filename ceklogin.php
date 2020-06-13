<?php

session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$cekdata = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username ='$username' AND password_account ='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($cekdata);
 
if($cek > 0){
    $_POST['username'] = $username;
    echo '<script> alert("hai user") 
    location.href="form.php"
    </script>';

}




?>