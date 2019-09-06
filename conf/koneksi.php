<?php 
	$servername = "localhost";
	$user		= "root";
	$password	= "";
	$db			= "shop";

	$con = mysqli_connect ($servername,$user, $password,$db);

	if(mysqli_connect_errno()){
		echo "Koneksi Database Gagal : ".mysqli_connect_error();

	$database = mysqli_select_db ($db)
		or die ('gagal terhubung ke database'.mysqli_error());
	}
?>