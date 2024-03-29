<?php
//Получение accessToken
//Требуется CODE
//Его получаем на другой странице

require "db_connect.php";
require_once __DIR__.'/vendor/autoload.php';
use \VK\Client\VKApiClient;
use \VK\OAuth\VKOAuth;
use \VK\OAuth\VKOAuthDisplay;
use \VK\OAuth\Scopes\VKOAuthUserScope;
use \VK\OAuth\VKOAuthResponseType;

$vk = new VKApiClient();

$oauth = new VKOAuth();
$client_id = 7145903;
$client_secret = 'tnai9uiWIBNddOxSyO0y';
$redirect_uri = 'http://hack.loc/get_token.php';
$code = $_GET['code'];

$response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code);
$access_token = $response['access_token'];

include 'header.php';
/*
include 'top_menu.php';
*/
include 'content/content_home.php';

if  (!empty($access_token)){
  $user = R::dispense('volunteers');
  $user->accessToken = $access_token;
  $user->isVolunteer = 1;
  $user->date_of_registration = date("d/m/Y");

  $_SESSION['logged_user'] = $user;
  R::store($user);

  header('Location: profile.php');
} else {
  echo "Не удалось зарегистрироваться через ВК(";
}

include 'footer.php';
?>
