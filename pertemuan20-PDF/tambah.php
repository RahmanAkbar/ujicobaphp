<?php
session_start();	

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
 
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {

	// var_dump($_POST);
	// var_dump($_FILES) die; 

	// cek apakah data berhasil di ubah atau tidak
	if ( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('databerhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
				";
	}
	
}

 ?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah data mahasiswa</h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">Nrp : </label>
			<input type="text" name="nrp" id="nrp"> 
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" required>
		</li>
		<li>
		<label for="email">Email : </label>
			<input type="text" name="email" id="email" required>
		</li>
	<li>
		<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan" required>
		</li>
	<li>
		<label for="gambar">Gambar : </label>
			<input type="file" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>
	
	</ul>

</form>

</body>
</html>