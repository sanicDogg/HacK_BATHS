<?php
require "db_connect.php";
if (!empty($_SESSION['logged_user'])) {
	//Определяем, волонтер ли вошел или организация
	if ($_SESSION['logged_user']->isVolunteer == 0) {

	} else {
		$id = $_SESSION['logged_user']->id;
		$user = R::load('volunteers', $id);
	}
}
//Если совпадают пароли или мы залогинены как волонтер
	if ($_POST["password"] == $_POST["password2"] || $_SESSION['logged_user']->isVolunteer == 1)
	{
		if ($_POST["password"] == $_POST["password2"]){
			$user = R::dispense('volunteers');
		}

		if ($_SESSION['logged_user']->isVolunteer == 1) {
				$user = R::load('volunteers', $_SESSION['logged_user']->id);
		}

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
		$user->date_of_registration = date("d/m/Y");

		if ($_POST["password"] == $_POST["password2"]){
			$_SESSION['logged_user'] = $user;
		}

		R::store($user);
	}	else {
		echo '<p>Пароли не совпадают!</p>';
		echo "<p><a href='/register_volunteer.php'>Вернуться</a></p>";
	}

	include 'header.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
