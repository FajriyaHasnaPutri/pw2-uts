<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
    
        <title>Buat Data Laptop - Aplikasi Penjualan Laptop</title>
    </head>
    <body>
        <div class ="container">
        <h1 class = "text-center">Aplikasi Penjualan Laptop</h1>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-danger text-white">
        <h5>Buat Data</h5>
        </div>

        <div class="card-body">
        <p>Isi semua yang diperlukan dibawah!</p>
        <form method="post" action="tambah_aksi.php">
            <!-- <div class="form-group">
            <label for="tanggal">Tanggal Laptop :</label><br>
            <input type="date" id="tanggal" name="tanggal"><br>
            <br> -->
            <div class="form-group">
            <label for="Merk_Laptop">Merk_Laptop :</label><br>
            <input type="text" id="Merk_Laptop" name="Merk_Laptop"><br>
            <div class="form-group">
            <label for="Seri_Laptop">Seri_Laptop :</label><br>
            <input type="text" id="Seri_Laptop" name="Seri_Laptop"><br>
            <br>
            <div class="form-group">
            <label for="Tahun_Produksi">Tahun_Produksi :</label><br>
            <input type="text" id="Tahun_Produksi" name="Tahun_Produksi"><br>
            <br>
</div>
            <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
        </form> 
        <br>
        <a href="index.php">Kembali Ke Halaman Utama</a>
        <script type="text/javascrip" src ="bootstrap.min.js"></script>
        <hr />
    <h6 class = "text-center">&copy Fajriya Hasna Putri - 20090112</h6>
    <hr />
    </body>
</html>