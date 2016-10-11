<?php

$dbname 	= "contohdb";
$host   	= "localhost"; //127.0.0.1
$username	= "lavin";
$password	= "lavin";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	print "Koneksi ke server database gagal.";
	exit();
}
?>