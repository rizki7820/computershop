<?php
session_start();
if(!isset($_SESSION["ID_MEMBER"])){
header("Location: login.php");
exit(); }
?>