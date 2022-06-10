<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <title>Edit Data Laptop - Aplikasi Penjualan Laptop</title>
</head>
<body>
        <div class ="container">
        <h1 class="text-center">Aplikasi Penjualan Laptop</h1>
        <hr />
	<br/>
	<a href="index.php" class ="btn btn-danger" name="bsimpan">KEMBALI</a>
	<br/>
	<br/>
        <div class="card mt-4">
        <div class="card-header bg-danger text-white">
	<h5>Edit Data Laptop</h5>
        </div>
 
	<?php
	include 'koneksi.php';
        $no = 1;
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_laptop where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
                <div class="card-body">
		<form method="post" action="update.php">
                <div class="form-group">
                    <!-- <label for="tanggal"></label><br> -->
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="hidden" id="tanggal" name="tanggal" value="<?php echo $d['tanggal'] ?>">
                <div class="form-group">
                    <label for="Merk_Laptop">Merk_Laptop:</label><br>
                    <input type="text" id="Merk_Laptop" name="Merk_Laptop" value="<?php echo $d['Merk_Laptop'] ?>"><br>
                    <div class="form-group">
                    <label for="Seri_Laptop">Seri_Laptop :</label><br>
                    <input type="text" id="Seri_Laptop" name="Seri_Laptop" value="<?php echo $d['Seri_Laptop'] ?>"><br>
                    <br>
                    <div class="form-group">
                    <label for="Tahun_Produksi">Tahun_Produksi :</label><br>
                    <input type="text" id="Tahun_Produksi" name="Tahun_Produksi" value="<?php echo $d['Tahun_Produksi'] ?>"><br>
                    <br>
                    </div>
                    <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
                </form> 
			<?php } ?>
<script type="text/javascrip" src ="bootstrap.min.js"></script>
<hr />
    <h6 class= "text-center">&copy Fajriya Hasna Putri - 20090112</h6>
    <hr />
</body>
</html>