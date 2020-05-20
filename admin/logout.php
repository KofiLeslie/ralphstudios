<?php
$redirectURL = 'index.php';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
header("Location: ".$redirectURL);
exit();
?>