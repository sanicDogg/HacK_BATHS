<?php
//подключаем библиотеку redbeanphp
require "libs/rb.php";
//Подключаемся к базе
R::setup( 'mysql:host=localhost;dbname=hack_db',
        'root', '' ); //for both mysql or mariaDB

//запуск сессиии
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
