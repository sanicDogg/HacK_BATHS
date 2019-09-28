<?php
	require 'db_connect.php';
	//unset($_SESSION['logged_user']);
	session_unset();

	include 'header.php';

	include 'content/content_home.php';

	include 'footer.php';
?>
