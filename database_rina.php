<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rina</title>
   
</head>
<body>
<?php
    include 'koneksi.php';
    
    $query  = "SELECT * FROM tb_ultah_rina";
    $result = mysqli_query($koneksi, $query);
    if($result):
?>
    <h4>Ultah Rina</h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Pembuat Acara</th>
            <th>Jumlah Anak Kelas</th>
            <th>Jumlah Anak Rumah</th>
            <th>Jumlah Jenis Makanan</th>
            <th>Total</tr>
        </tr>
        <?php while($row = mysqli_fetch_row($result)):?>
            <tr>
                <?php 
                $no = $row[0];
                $nama = $row[1];
                $jumlahAnakKelas = $row[2];
                $jumlahAnakRumah = $row[3];
                $jumlahJenisMakanan = $row[4];
                $total = $row[5];
                ?>
                <td><?= $no?></td>
                <td>
                    <a href="form_update_rina.php?no=<?= $no;?>">   <?=$nama;?></a>
                 
                </td>
              
                <td><?=$jumlahAnakKelas;?></td>
                <td><?=$jumlahAnakRumah;?></td>
                <td><?=$jumlahJenisMakanan;?></td>
                <td><?=$total;?></td>
            </tr>
        <?php endwhile;?>
    </table>

<?php endif;?>
    
</body>
</html>









