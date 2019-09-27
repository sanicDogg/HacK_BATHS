<?php
//Получение CODE
//Его получаем на другой странице

require_once __DIR__.'/vendor/autoload.php';
use \VK\Client\VKApiClient;
use \VK\OAuth\VKOAuth;
use \VK\OAuth\VKOAuthDisplay;
use \VK\OAuth\VKOAuthResponseType;

$oauth = new VKOAuth();
$client_id = 7145903;

$redirect_uri = 'http://hack.loc';
$display = VK\OAuth\VKOAuthDisplay::PAGE;
$scope = [VK\OAuth\Scopes\VKOAuthUserScope::FRIENDS, VK\OAuth\Scopes\VKOAuthUserScope::PHOTOS];
$state = 'secret_state_code';

$browser_url = $oauth->getAuthorizeUrl(VK\OAuth\VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope, $state);

if (isset($browser_url)) {
  echo "<h1>Ваша ссылка готова</h1>";
  echo "<a href='$browser_url'>$browser_url</a>";
}
?>
