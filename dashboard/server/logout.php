<?php
session_start();
session_destroy();
unset($_SESSION["role"]);
unset($_SESSION["name"]);
$_SESSION['loggedin'] = false;
unset($_SESSION['id']);
header("Location: ../Login/index.php");
?>