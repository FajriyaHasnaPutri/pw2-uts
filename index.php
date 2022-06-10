<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">

        <style type="text/css">
	body {background: #000000 url('image/background.jpg') no-repeat center top;
    font-family: sans-serif;
	
    }
	</style>

        <title>Aplikasi Penjualan Laptop</title>
    </head>
   
    <body >
  
        <div class ="container">
        <h1 class = "text-center" >Aplikasi Penjualan Laptop</h1>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-danger text-white">
        <h5>Daftar Data Laptop</h5>
        </div>

        <div class="card-body" >
        <table class = "table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th class = "text-center">No</th>
                    <th class = "text-center">Tanggal</th>
                    <th class = "text-center">Merk_Laptop</th>
                    <th class = "text-center">Seri_Laptop</th>
                    <th class = "text-center">Tahun_Produksi</th>
                </tr>
            </thead>
            <?php 
		    include 'koneksi.php';
		    $no = 1;
		    $data = mysqli_query($koneksi,"select * from data_laptop");
		    while($d = mysqli_fetch_array($data)){
		    	?>
		    	<tr>
		    		<td><?php echo $no++; ?></td>
		    		<td><?php echo $d['tanggal']; ?></td>
		    		<td><?php echo $d['Merk_Laptop']; ?></td>
		    		<td><?php echo $d['Seri_Laptop']; ?></td>
                    <td><?php echo $d['Tahun_Produksi']; ?></td>
		    		<td>
                        <a href="edit.php?id=<?php echo $d ["id"]; ?>" class= "btn-danger">EDIT</a>
		    			<a href="hapus.php?id=<?php echo $d['id']; ?>" class= "btn-danger">HAPUS</a>
		    		</td>
			    </tr>
			<?php 
		}
		?>
        </table>
        <p>Tambah Data Laptop Baru?</p>
        <a href="tambah.php"><button id="tambah" class ="btn btn-danger" name="bsimpan">Buat Data</button></a>
    <br>
    <br>
    <hr />
    <h6 class ="text-center">&copy Fajriya Hasna Putri - 20090112</h6>
    <hr />
    </body>
</html>