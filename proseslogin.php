<?php
<<<<<<< HEAD
	session_start();
	include"koneksi.php";
	$ID_ADMIN=$_POST['ID_ADMIN'];
	$PASS=$_POST['PASS'];
	$cekuser = mysqli_query($koneksi,"SELECT * FROM admin WHERE ID_ADMIN = '$ID_ADMIN'");
   $hasil = mysqli_fetch_array($cekuser);

if(mysqli_num_rows($cekuser) == 0) {
       echo "<div align='center'>Username Belum Terdaftar! <a href='Login.php'>Back</a></div>";
   } else {
       if($PASS <> $hasil['PASS']) {
           echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
         $_SESSION['ID_ADMIN'] = $hasil['ID_ADMIN'];
=======
   session_start();

   include "koneksi.php";
   $USERNAME = $_POST['USERNAME'];
   $PASSWORD= $_POST['PASSWORD'];
   $cekuser = mysqli_query($koneksi,"SELECT * FROM member WHERE USERNAME = '$USERNAME'");
   $hasil = mysqli_fetch_array($cekuser);

   if(mysqli_num_rows($cekuser) == 0) {
       echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
       if($PASSWORD <> $hasil['PASSWORD']) {
           echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
         $_SESSION['USERNAME'] = $hasil['USERNAME'];
>>>>>>> fix
         header('location:index.php');
        }
    }
?>