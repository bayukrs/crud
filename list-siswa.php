<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru</title>
</head>
<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelaamin</th>
				<th>Agama</th>
				<th>Sekmolah Asal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			
			<?php 

				$sql = "select * from calon_siswa";
				$query = mysqli_query($db, $sql);

				while ($siswa = mysqli_fetch_array($query)) {
					
					echo "<tr>";
						echo "<td>".$siswa['id']."</td>";
						echo "<td>".$siswa['nama']."</td>";
				}

			 ?>
		</tbody>
	</table>
</body>
</html>