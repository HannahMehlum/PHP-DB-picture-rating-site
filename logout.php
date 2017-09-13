<?php
session_start ();
session_destroy ();
session_start ();
$_SESSION['success'] = "Goodbye,you are now logged out";
header('Location: login.php');die;
?>
