<?php
   session_start();

   include "koneksi.php";
   $USERNAME = $_POST['USERNAME'];
   $PASSWORD= $_POST['PASSWORD'];
   $cekuser = mysqli_query($koneksi,"SELECT * FROM member WHERE USERNAME = '$USERNAME'");
   $hasil = mysqli_fetch_array($cekuser);

   if(mysqli_num_rows($cekuser) == 0) {
       echo "<div align='center'>Username Belum Terdaftar! <a href='../login.php'>Back</a></div>";
   } else {
       if($PASSWORD <> $hasil['PASSWORD']) {
           echo "<div align='center'>Password salah! <a href='../login.php'>Back</a></div>";
     } else {
         $_SESSION['USERNAME'] = $hasil['USERNAME'];
         header('location:../index.php');
        }
    }
?>