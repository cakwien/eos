<?php

$hostDB			= "localhost";
$usernameDB		= "root";
$passwordDB		= "";
$namaDB			= "eos";

//KONEKSI KE DATABASE
$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//CEK KONEKSI
if(mysqli_connect_error())
{
	echo "GAGAL";
	die;
}

include("mod/babon.php");
$data = new data;

include("../mod/format.php");

include("control/rule.php");

date_default_timezone_set('Asia/Jakarta');





?>
