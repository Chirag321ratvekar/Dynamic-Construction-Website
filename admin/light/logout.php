<?php
include('security.php');
	session_destroy();
	unset($_SESSION['username']);
	session_unset();
	header('Location:page-login.php');

?>