<html>
<head>
	<title>Membuat Otentikasi User</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
if (isset($_POST['daftar'])) {
	$id			= $_POST['id'];
	$nama		= $_POST['nama'];
	$pwd		= $_POST['pwd'];
	
	require("connectdb.php");
	$sql = "insert into webuser(id, nama, pwd)".
		   "values('$id','$nama', md5('$pwd'))";
	mysqli_query($conn, $sql);
	$num = mysqli_affected_rows($conn);
	if ($num > 0) {
		?>
		Selamat,Anda telah terdaftar di website kami.<br />
		[<a href="login.php">Login</a>]<br /><br />
		<table>
		 <tr>
		    <td>ID</td>
			<td>:</td>
			<td><strong><?php print $nama; ?></strong></td>
		 </tr>
		 <tr>
		 <td>Password</td>
			<td>:</td>
			<td><strong><?php print $pwd; ?></strong></td>
		 </tr>
		 </table>
		 <?php
	} else {
		?>
		Proses registrasi gagal.Silahkan ulangi!<br />
		[<a href="register.php">Kembali ke Form Register</a>]
		<?php
	}
}
?>
</body>
</html>