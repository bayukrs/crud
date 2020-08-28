<?php 

	DEFINE (DB_SERVER, 'localhost');
	DEFINE (DB_USER, 'admin');
	DEFINE (DB_PASSWORD, 'bayu123321');
	DEFINE (DB_NAME, 'pendaftaran_siswa');

	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

	if ( !$db ){
		die("Koneksi ke DB gagal: " . mysql_connect_error());
	}

 ?>