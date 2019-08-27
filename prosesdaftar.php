<?php
  include "koneksi.php";
  $ID_MEMBER=$_POST['ID_MEMBER'];
  $USERNAME=$_POST['USERNAME'];
  $PASSWORD=$_POST['PASSWORD'];
  $NAME=$_POST['NAME'];
  $GENDER=$_POST['GENDER'];
  $EMAIL=$_POST['EMAIL'];
  $CELLPHONE=$_POST['CELLPHONE'];
  $ADDRESS=$_POST['ADDRESS'];

$cekuser = mysqli_query($koneksi,"SELECT * FROM member WHERE USERNAME = '$USERNAME'");

if(mysqli_num_rows($cekuser) > 0) {
       echo "<div align='center'>Username Sudah Terdaftar! <a href='registration.php'>Back</a></div>";
   }
   else {
       if(!$USERNAME || !$PASSWORD) {
           echo "<div align='center'>Masih Ada Data yang Kosong! <a href='registration.php'>Back</a>";
        } else {
            $submit = mysqli_query($koneksi,"INSERT INTO member(ID_MEMBER, USERNAME,PASSWORD,NAME,GENDER,CELLPHONE,ADDRESS) VALUES('$ID_MEMBER','$USERNAME','$PASSWORD','$NAME','$GENDER','$CELLPHONE','$ADDRESS')");

        if ($submit) {
              echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
            } else {
                echo "<div align='center'>Proses Gagal!</div>";
            }
        }
    }
?>