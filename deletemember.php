<?php
include("conf/koneksi.php");
 
//getting id of the data from url
$ID_MEMBER = $_GET['ID_MEMBER'];
 

$row = mysqli_query($mysqli, "DELETE FROM member WHERE ID_MEMBER=$ID_MEMBER");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");

?>
