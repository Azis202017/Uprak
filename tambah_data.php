<?php
include 'koneksi.php';

    
    $nama_pembuat_acara = $_POST['nama_pmbuat_acara'];
    $jumlahAnakKelas = $_POST['jumlah_anak_kelas'];
    $jumlahAnakRumahan = $_POST['jumlah_anak_rumah'];
    $jumlahJenisMakanan = $_POST['jumlah_jenis_makanan'];
    $total = $_POST['total'];

    $query = mysqli_query($koneksi,"INSERT INTO tb_ultah_rina
    VALUES('','$nama_pembuat_acara',$jumlahAnakKelas,$jumlahAnakRumahan,$jumlahJenisMakanan,$total)");
    header('location:database_rina.php');


?>
