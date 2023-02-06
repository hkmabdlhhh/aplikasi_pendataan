<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h3>Daftarkan Peserta</h3>
	<form method="POST" action="proses_admin.php">
	<fieldset>
		<legend>Tambahkan Event</legend>
		<table>
			<tr>
				<td><label>Nama :</label></td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
			</tr>
			<tr>
				<td><label>Tanggal :</label></td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
					<td>Informasi :</td>
					<td><textarea name="informasi" cols="20%" rows="2" placeholder="Inpo"></textarea></td>
				</tr>
			<tr>
				<td><label><input type="submit" name="submit" value="Masukkan"></label></td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>