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

    $qur = "INSERT INTO `product` (`ID_PRODUCT`,`ID_CATEGORY`,`NAME`,`BRAND`,`PRICE`,`STOCK`,`DESCRIBE`,`IMAGE`) VALUES('$ID_PRODUCT','$ID_CATEGORY','$NAME','$BRAND','$PRICE','$STOCK','$DESCRIBE','$IMAGE')";
    $submit=mysqli_query($con,$qur);
    if(!$submit){
       $isi="TerjaDI Kesalahan".mysqli_error($con)."-".mysqli_errno($con);
        echo "<script>alert('terjadi kesalahan simpan data !!!'')";
} else 
    echo "<meta http-equiv='refresh' content='0; url=tablesproduct.php'>";
?>