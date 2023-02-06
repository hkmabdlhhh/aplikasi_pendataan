<html>
<head>
	<title>Data Peserta</title>
</head>
<body>
		<a href="form_daftar.php">pendaftaran</a>
	<hr>

<br>
	<form action="proses_peserta.php" method="POST">
		<fieldset>
			<legend>Data Peserta</legend>
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="..."></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="..."></td>
				</tr>
	
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="tanggal_lahir" placeholder="..."></td>
				</tr>

				<tr>
					<td>Informasi</td>
					<td>:</td>
					<td alig>
						<textarea name="informasi" cols="30" rows="2" placeholder="..."></textarea>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="kirim" value="daftar"></td>
				</tr>
			</table>
			<hr>
			<a href="admin.php">kembali</a>
		</fieldset>
		<hr>
		<br>
	
	</form>
</body>
</html>