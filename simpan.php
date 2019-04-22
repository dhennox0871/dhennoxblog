<?php

session_start();

include"konek.php";
include"library.php";
if(isset($_POST['dept'])){
$dept=$_POST['dept'];
$dept2=implode("|",$dept);
}else{
	$dept2="00";
}
$kode=$_POST['kode'];

$sqno=mysqli_query($konek,"select * from member where kode='$kode'");

if(mysqli_num_rows($sqno)>0){

	$_SESSION['ermsg']="kode $kode sudah pernah di input/ sudah ada";

	header("location:tambah.php");	

}else{$nama=$_POST['nama'];

if(!isset($_POST['cool3']))
{
	$cool3=0;
}else{
	$cool3=$_POST['cool3'];
}
	  $tmplahir=$_POST['tmplahir'];
	  $tglahir=date("Y-m-d",strtotime($_POST['tglahir']));
	  $alamat=$_POST['alamat'];
	  $darah=$_POST['darah'];
	  $jkel=$_POST['jkel'];
	  $stnikah=$_POST['stnikah'];
	  $telpon=$_POST['telpon'];
	  $hape=$_POST['hape'];
	  $email=$_POST['email'];
	  $ayah=$_POST['ayah'];
	  $ibu=$_POST['ibu'];
	  $anggotacool=$_POST['anggotacool'];
	  $kaj=$_POST['kaj'];

$sqdp="insert into member values('$kode','$nama','$dept2',1,$cool3,'','$tmplahir','$tglahir','$alamat','$darah',$jkel,$stnikah,'$telpon','$hape','$email','$ayah','$ibu','$anggotacool',$kaj)";

if(mysqli_query($konek,$sqdp))

{

	$_SESSION['ermsg']="data berhasil disimpan";

}else{

	$_SESSION['ermsg']="data gagal disimpan";

}

	header("location:admin.php");	

}
?>