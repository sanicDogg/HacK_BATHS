<?php
	require 'db_connect.php';
	unset($_SESSION['logged_user']);

	include 'header.php';

	/*include 'top_menu.php';
	*/
	include 'content/content_home.php';

	include 'footer.php';
?>
