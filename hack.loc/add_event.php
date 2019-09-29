<?php

		require "db_connect.php";

		$event = R::dispense('events');

		$event->name = $_POST["name"];
		$event->description = $_POST["description"];
		$event->data = $_POST["date"];
		R::store($event);

	include 'header.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
