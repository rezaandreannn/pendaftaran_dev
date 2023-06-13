<?php
/* Specify the server and connection string attributes. */
$ServerName = "WIN-MKL0M1T7GNG";
$connectionInfo = array('Database'=>'DB_RSMM');
$conn = sqlsrv_connect($ServerName,$connectionInfo);

/* $pdo = new PDO("sqlsrv:Server=localhost;","sa", ""); */

/*if ($conn) {
	echo 'Koneksi ke SQL Server Berhasil <br/>';
} else {
	echo 'Failed <br/>';
	die(print_r(sqlsrv_errors(),TRUE));
}*/

?>
