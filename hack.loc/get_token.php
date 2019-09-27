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
$redirect_uri = '';
$code = $_GET['code'];

$response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code);
$access_token = $response['access_token'];

echo '<h1>Ваш accessToken:</h1>';
echo $access_token;
?>
