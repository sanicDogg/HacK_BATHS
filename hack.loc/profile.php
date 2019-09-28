<?php
//Нужен доступ к VK API и к базе
  require_once __DIR__.'/vendor/autoload.php';
  use \VK\Client\VKApiClient;
  use \VK\OAuth\VKOAuth;
  use \VK\OAuth\VKOAuthDisplay;
  use \VK\OAuth\VKOAuthResponseType;
  require "db_connect.php";

  include 'header.php';

	include 'top_menu.php';

	include 'content/content_profile.php';

	include 'footer.php';
?>
