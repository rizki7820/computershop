<?php
	session_start();

	if(!isset($_SESSION['ID_ADMIN'])){
		header('location:login.php');
	}
	else{
		$ID_ADMIN=$_SESSION['ID_ADMIN'];
	}
?>
<title>BERHASIL LOGIN</title>
<div align='center'>
	Selamat Datang, <b><?php echo $ID_ADMIN;?></b> <a href="logout.php"><b>Logout</b></a>
</div>