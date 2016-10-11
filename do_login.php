<html>
<head>
	<title>Membuat Otentikasi User</title>
</head>
<body>
<?php
if (isset($_POST['login'])) {
	$id		= $_POST['id'];
	$pwd	= $_POST['pwd'];
	
	require("connectdb.php");
	
	$query = "select name from webuser".
			 "where id = '$id' and pwd = md5('$pwd')";
	$result = mysqli_query($conn, $query);
	$num = mysqli_num_rows($result);
	
	if ($num == 1) {
		list($nama) = mysqli_fetch_array($result);
		?>
		<h2>Secret Area</h2>
		Selamat datang,
		<strong><?php print $nama; ?></strong><br />
		
		Ini adalah contoh halaman yang hanya bisa di akses oleh user yang telah terdaftar di website.
		
		<?php
	} else {
		header("Location:"."http://localhost/modul-PHP/ws1/login.php");
	}
}
?>
</body>
</html>