<?php
//подключаем библиотеку redbeanphp
require "libs/rb.php";
//Подключаемся к базе
R::setup( 'mysql:host=localhost;dbname=site_db',
        'root', '' ); //for both mysql or mariaDB

//запуск сессиии
session_start();
