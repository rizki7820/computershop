<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $db  = "shop";

   $koneksi = mysqli_connect ($hostname,$username,$password,$db);
    $connect = new PDO("mysql:host=localhost;dbname=shop", "root", "");

	if(mysqli_connect_errno()){
		echo "Koneksi Database Gagal : ".mysqli_connect_error();

	$db = mysqli_select_db ($db)
		or die ('Gagal Terhubung Ke Database'.mysqli_error());
    }
?>