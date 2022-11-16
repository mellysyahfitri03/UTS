<!doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dasbord Admin</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
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
	
	<center><h3>DATABASE OBAT</h3>

<table border="2" width="1000px">
		<tr>
		<td>KODE OBAT</td><td>NAMA OBAT</td><td>JENIS OBAT</td><td>STOK</td><td>EXPIRED</td><td>SATUAN</td><td>HARGA BELI</td>
		</tr>
		

<?php


include "koneksi.php";

$sql=$koneksi->query("select * from obat order by kode_obat ASC");

while($row= $sql->fetch_assoc()){
	?>

		<tr>
			<td><?php echo $row['kode_obat']?> </td>
			<td><?php echo $row['nama_obat']?> </td>
			<td><?php echo $row['jenis_obat']?></td>
			<td><?php echo $row['stok']?></td>
			<td><?php echo $row['expired']?></td>
			<td><?php echo $row['satuan']?></td>
			<td><?php echo $row['harga_beli']?></td>
		</tr>
<?php
}
?>

</table></center>


</body>
</html>
</body>
</html>
