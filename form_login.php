<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Selamat Datang</h2>
	<p>Silahkan Login</p>
	<br>
	<form method="Post" action="proses_login.php">
	<fieldset>
		<legend>Login</legend>
		<table>
			<tr>
				<td><label>Username :</label></td>
				<td><input type="text" name="username" placeholder="Masukkan Username..."></td>
			</tr>
			<tr>
				<td><label>Password :</label></td>
				<td><input type="password" name="password" placeholder="Masukkan Password..."></td>
			</tr>
			<tr>
				<td><label><input type="submit" name="submit" value="Login"></label></td>
			</tr>
		</table>
		<br>
		
	</fieldset>
</form>
</body>
</html>