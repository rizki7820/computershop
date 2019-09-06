<?php
include 'conf/koneksi.php';
$ID_PRODUCT=$_GET['id'];
$qur = mysqli_query($con,"delete from product where ID_PRODUCT='$ID_PRODUCT'");
$result=mysqli_query($con,$qur);
    // apakah query hapus berhasil?
    if( $result ){
       echo "<script>alert('Data has been deleted')</script>";
       echo "meta http-equiv='refresh'content='0; 
            url=?page=tablesproduct.php'>";
    } else {
        echo "Delete data failed. Try again !!";
        echo "<meta http-equiv='refresh' content='0; url=tablesproduct.php'>";
    }
?>