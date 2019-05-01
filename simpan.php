<?php
include"konek.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$email=$_POST['email'];
$tgl=date('Y-m-d');
$sqdp="insert into mastercust values('$kode','$nama','$alamat','$kota','$email','$tgl')";
$save=$conn->prepare($sqdp);
$save->execute();
header("location:index.php");	
?>
