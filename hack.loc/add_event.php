<?php

		require "db_connect.php";

		$event = R::dispense('events');

		$event->name = $_POST["name"];
		$event->description = $_POST["description"];
		$event->date = $_POST["date"];
		$event->fotoLink = $_POST["fotoLink"];
		$event->date_of_publicating = date("d/m/Y");
		R::store($event);

	include 'header.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
