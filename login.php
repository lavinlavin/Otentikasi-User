<html>
<head>
	<title>Membuat Otentikasi User</title>
</head>
<body>
<h2>Form Login</h2>
Anda belum terdaftar sebagai user?
[<a href="register.php">Daftar sekarang</a>]
<br /><br />
<form action="do_login.php" method="post">
<table>
	<tr>
		<td>ID User</td>
		<td><input type="textfield" name="id" maxlength="15" size="25" /></td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td><input type="password" name="pwd" maxlength="15" size="25" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="login" value="Login" />
		</td>
	</tr>
</table>
</form>
</body>
</html>