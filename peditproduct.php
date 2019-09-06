<?php
  include 'conf/koneksi.php';
    $ID_PRODUCT =$_POST['ID_PRODUCT'];
    $ID_CATEGORY=$_POST['ID_CATEGORY'];
    $NAME       =$_POST['NAME'];
    $BRAND      =$_POST['BRAND'];
    $PRICE      =$_POST['PRICE'];
    $STOCK      =$_POST['STOCK'];
    $DESCRIBE   =$_POST['DESCRIBE'];
    $IMAGE      =$_POST['IMAGE'];

    $qur = "UPDATE `product` SET `ID_CATEGORY` = '$ID_CATEGORY', `NAME` = '$NAME', `BRAND` = '$BRAND', `PRICE` = '$PRICE', `STOCK` = '$STOCK', `DESCRIBE` = '$DESCRIBE', `IMAGE` = '$IMAGE' WHERE `product`.`ID_PRODUCT` = '$ID_PRODUCT'";
        $submit=mysqli_query($con,$qur);
      
    if(!$submit) {
    $isi = "Terjadi kesalahan!".mysqli_error($con)."-".mysqli_errno($con);
    echo "<script>alert('terjadi kesalahan saat simpan data! ')</script>";
    echo "<meta http-equiv='refresh' content='0; url=tablesproduct.php'>";
    } else{
    echo "<script>alert('Data berhasil diubah!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=tablesproduct.php'>";
    }
?>