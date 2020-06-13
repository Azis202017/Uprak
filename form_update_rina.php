<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
</head>
<body>
    <h2>Form Perubahan Data Rina</h2>
    <?php
    include 'koneksi.php';
    
    // $no = $_GET['']
    $no = $_GET['no'];
    $query = "SELECT * FROM tb_ultah_rina WHERE kd_ultah=no";
    $result = mysqli_query($koneksi,$query);
    if($result){
       
    } 
    
    
    
    ?>
    
</body>
</html>