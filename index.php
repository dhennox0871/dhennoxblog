<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pendaftaran Anggota Baru</title>
  </head>
  <body>
	  <div class="container">
		  <div class="row">
			  <div class="col-md-10">
    <h1>Selamat Datang Anggota Baru :</h1>
<form id="form1" name="form1" method="post" action="simpan.php">
  <table border="0" cellpadding="5px" cellspacing="5px" width="600px">
    <tr>
      <td>Kode Member</td>
      <td>: </td><td colspan="2">  
       <input type="text" name="kode" size="10" required/></td>
    </tr>
    <tr>
      <td>Nama </td>
      <td>:</td><td colspan="2">
        <input type="text" name="nama" size="50" required/></td>
    </tr>
      <tr>
      <td valign="top">Alamat </td>
      <td valign="top">:</td><td colspan="2">
		<textarea name="alamat" cols="50" rows="4" ></textarea>
        </td>
    </tr>
    
    <tr>
      <td>Kota</td>
      <td>:</td><td colspan="2">
        <input type="text" name="kota" size="30"/>
        </td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td><td colspan="2">
        <input type="text" name="email" size="30"/>
        </td>
    </tr>
    <tr>
        <td><input name="submit" type="submit" value="Save" class="btn btn-primary" style="font-size:small" /></td>
        <td colspan="3">&nbsp;</td>
	</tr>
  </table>
</form>    
			  </div>
		  </div>
	  </div>
	  <?php
	  include "konek.php";
	  ?>
	  <div class="container">
		  <div class="row">
		  	<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$data=$conn->query("select * from mastercust order by custid");
						$hasil=$data->fetchall();
						foreach($hasil as $row){
						?>
						<tr>
						<td>Kode</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Kota</td>
						<td>Email</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			  </div>
		  </div>
	  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
