<?php

include 'koneksi.php';

$id = $_GET['kd_ultah'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from tb_ultah_rina where kd_ultah='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:database_rina.php");

?>