<?php
  include "../connection/connection.php";
  $ID_MEMBER=$_POST['ID_MEMBER'];
  $USERNAME=$_POST['USERNAME'];
  $PASSWORD=md5($_POST['PASSWORD']);
  $NAME=$_POST['NAME'];
  $GENDER=$_POST['GENDER'];
  $EMAIL=$_POST['EMAIL'];
  $CELLPHONE=$_POST['CELLPHONE'];
  $ADDRESS=$_POST['ADDRESS'];

$cekuser = mysqli_query($koneksi,"SELECT * FROM member WHERE USERNAME = '$USERNAME'");

if(mysqli_num_rows($cekuser) > 0) {
       echo '<script>alert("Username already registered!!!")</script>';
       echo '<script>window.location.href="../registration.php"</script>';
   }
   else {
       if(!$USERNAME || !$PASSWORD) {
         echo '<script>alert("Fill in all field!!!")</script>';
         echo '<script>window.location.href="../registration.php"</script>';
        } else {
            $submit = mysqli_query($koneksi,"INSERT INTO member(ID_MEMBER, USERNAME,PASSWORD,NAME,GENDER,CELLPHONE,ADDRESS) VALUES('$ID_MEMBER','$USERNAME','$PASSWORD','$NAME','$GENDER','$CELLPHONE','$ADDRESS')");

        if ($submit) {
            echo '<script>alert("Registered successfully.. Please Login !")</script>';
            echo '<script>window.location.href="../login.php"</script>';
            } else {
                echo "<div align='center'>Proses Gagal!</div>";
            }
        }
    }
?>