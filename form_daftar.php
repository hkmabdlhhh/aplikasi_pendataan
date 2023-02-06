<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<h2><center>Selamat Datang Di Halaman Pendaftaran</center></h2>
	<p>Silahkan Diisi</p>
	<br>
	<center><form method="post" action="proses_daftar.php"></form></center>
		<fieldset><table width="40%"><br>
			<legend>Pendaftaran</legend>
				<tr>
					<td>nama :</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
					</center> 
				</tr>
				<tr>
					<td>email :</td>
					<td><input type="email" name="email" placeholder="Masukkan email..."></td>
				</tr>
				<tr>
					<td>tanggal Lahir :</td>
					<td><input type="date" name="tanggal_lahir"></td>
				</tr>
				<tr>
					<td>alamat :</td>
					<td><textarea name="alamat" cols="20%" rows="2" placeholder="Masukkan Alamat..."></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Daftar"></td></tr></table></fieldset>
				</tr>	
			</center>		
			</table><a href="home.php">  kembali</a></center>
		</fieldset>
	</body>
</html>