
<!doctype HTML>
<html>
<head>
	<title>INPUT DATA OBAT</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Input Data Obat</b></h3></center>
				<br>
				<form action="proses-tambah.php" method="POST">
					<div class="form-group">
						<label for="kode_obat">KODE OBAT</label>
						<input type="kode_obat" name="kode_obat" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama_obat">NAMA OBAT</label>
						<input type="nama_obat" name="nama_obat" class="form-control">
					</div>
					<div class="form-group">
						<label for="jenis_obat">JENIS OBAT</label>
						<input type="jenis_obat" name="jenis_obat" class="form-control">
					</div>
	
					<div class="form-group">
						<label for="stok">STOK</label>
						<textarea name="stok" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="expired">EXPIRED</label>
						<textarea name="expired" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="satuan">SATUAN</label>
						<textarea name="satuan" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="harga_beli">HARGA BELI</label>
						<textarea name="harga_beli" class="form-control">
						</textarea>
					</div>




					<input type="submit" name="kirim" value="Simpan" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>