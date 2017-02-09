<?php 
include 'loginserv.php';
$_SESSION['username'] = 'invitado';
header("Location: login.php");
?>