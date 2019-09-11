<?php
   session_start();

   include "../connection/connection.php";
   $USERNAME = $_POST['USERNAME'];
   $PASSWORD= $_POST['PASSWORD'];
   $cekuser = mysqli_query($koneksi,"SELECT * FROM member WHERE USERNAME = '$USERNAME'");
   $hasil = mysqli_fetch_array($cekuser);

   if(mysqli_num_rows($cekuser) == 0) {
       echo '<script>alert("Username not registered!!!")</script>';
       echo '<script>window.location.href="../login.php"</script>';
   } else {
       if($PASSWORD <> $hasil['PASSWORD']) {
        echo '<script>alert("Wrong Password!!!")</script>';
        echo '<script>window.location.href="../login.php"</script>';
     } else {
         $_SESSION['USERNAME'] = $hasil['USERNAME'];
         echo '<script>alert("Login Success... Welcome)</script>';
         echo '<script>window.location.href="../index_member.php"</script>';
        }
    }
?>

