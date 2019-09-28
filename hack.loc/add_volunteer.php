<?php

	require "db_connect.php";
	if ($POST->password == $POST->password2)
	{
		$user = R::dispense('volunteers');

		$user->fio = $_POST["fio"];
		$user->dateOfBirth = $_POST["dateOfBirth"];
		$user->email = $_POST["email"];
		$user->phoneNum = $_POST["phoneNum"];
		$user->vkLink = $_POST["vkLink"];
		$user->placeOfStudy = $_POST["placeOfStudy"];
		$user->specialty = $_POST["specialty"];
		$user->languages = $_POST["languages"];
		$user->exp = $_POST["exp"];

		$user->expKids = $_POST["expKids"];
		$user->addSkills = $_POST["addSkills"];
		$user->expections = $_POST["expections"];
		$user->allergy = $_POST["allergy"];
		$user->photoLink = $_POST["photoLink"];
		$user->password = $_POST["password"];
		$user->isVolunteer = 1;
		/*
		$user->whyCooperating = $_GET["whyCooperating"];
		*/

		R::store($user);
	}	else {
		echo '<p>Пароли не совпадают!</p>';	}

	include 'header.php';
	include 'top_menu.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
