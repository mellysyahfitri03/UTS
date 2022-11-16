<?php
session_start();
include "koneksi.php";
?>
<?php

$kode_obat=$_POST['kode_obat'];
$nama_obat=$_POST['nama_obat'];
$jenis_obat=$_POST['jenis_obat'];
$stok=$_POST['stok'];
$expired=$_POST['expired'];
$satuan=$_POST['satuan'];
$harga_beli=$_POST['harga_beli'];

include "koneksi.php";

$simpan=$koneksi->query("insert into obat (kode_obat,nama_obat,jenis_obat,stok,expired,satuan,harga_beli)
						values('$kode_obat','$nama_obat', '$jenis_obat', '$stok','$expired','$satuan','$harga_beli')");

if($simpan==true){

	header("location:tampil-obat.php?pesan=inputberhasil");
} else{
	echo "Erorrr";
}

?>