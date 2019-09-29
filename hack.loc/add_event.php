<?php

	require "db_connect.php";

		$user = R::dispense('events');

		$user->name = $_POST["name"];
		$user->description = $_POST["description"];
		$user->data = $_POST["data"];

		$_SESSION['logged_user'] = $user;
		/*
		$user->whyCooperating = $_GET["whyCooperating"];
		*/

		R::store($user);

	include 'header.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
