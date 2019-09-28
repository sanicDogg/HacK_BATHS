<?php
//Получение accessToken
//Требуется CODE
//Его получаем на другой странице

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
  require "db_connect.php";
  $user = R::dispense('volunteers');
  $user->accessToken = $access_token;
  R::store($user);



} else die();

include 'footer.php';
?>
