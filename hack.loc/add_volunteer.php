<?php

require "db_connect.php";
$user = R::dispense('volunteers');

$user->fio = $_GET["fio"];
$user->dateOfBirth = $_GET["dateOfBirth"];
$user->email = $_GET["email"];
$user->phoneNum = $_GET["phoneNum"];
$user->vkLink = $_GET["vkLink"];
$user->placeOfStudy = $_GET["placeOfStudy"];
$user->specialty = $_GET["specialty"];
$user->languages = $_GET["languages"];
$user->exp = $_GET["exp"];

$user->expKids = $_GET["expKids"];
$user->addSkills = $_GET["addSkills"];
$user->expections = $_GET["expections"];
$user->allergy = $_GET["allergy"];
$user->photoLink = $_GET["photoLink"];
/*

$user->addSkills = $_GET["addSkills"];
$user->expections = $_GET["expections"];
$user->allergy = $_GET["allergy"];


$user->photoLink = $_GET["photoLink"];

>>>>>>> 1a34b8ebb006511b69763f7e929e587c9b7591ca
$user->whyCooperating = $_GET["whyCooperating"];
*/

R::store($user);

	include 'header.php';
	include 'top_menu.php';
	include 'content/content_home.php';

	include 'footer.php';
?>
