
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA OBAT</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
	
</head>
<body>
	<nav class="navbar-fixed-top navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="th.png"></li>
			<li><a href="index.php">DASBOARD ADMIN <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-obat.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	<body>
	<nav class="navbar navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="images web/logo2.png"></li>
			<li><a href="index.php">MENU <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-obat.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
<div class="container">
	<div class="row">
		<div class="col-md-12">	
		<h3>Data Obat</h3>
<?php

if(@$_GET['pesan']=="inputberhasil"){

?>
		<div class="alert alert-success">
					Penyimpanan Berhasil!
			</div>
<?php
}
?>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="list">					
			<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
				<thead>
					<tr>
					
					<th>KODE OBAT</th>
					<th>NAMA OBAT</th>
					<th>JENIS OBAT</th>
					<th>STOK</th>
					<th>EXFIRED</th>
					<th>SATUAN</th>
					<th>HARGA BELI</th>
					<TH>
					<a href ="tambah.php">
						<center><button type="add" name="btnAdd" class="btn btn-info">
							<span class=" glyphicon glyphicon-plus-sign"></span>Add
						</button></a></center></th>
					</tr>
				</thead>
				
			<?php
			include "koneksi.php";
			$sql=$koneksi->query("select * from obat order by kode_obat ASC");

			while($row= $sql->fetch_assoc()){
			?>
					
			<tr>
				<td><?php echo $row['kode_obat']?></td>
				<td><?php echo $row['nama_obat']?> </td>
				<td><?php echo $row['jenis_obat']?></td>
				<td><?php echo $row['stok']?></td>
				<td><?php echo $row['expired']?></td>
				<td><?php echo $row['satuan']?></td>
				<td><?php echo $row['harga_beli']?></td>

				<td>
					
				
				
<?php
}
?>	
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.flash.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/jszip.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/pdfmake.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/vfs_fonts.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.html5.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.print.min.js"></script>
</body>
</html>