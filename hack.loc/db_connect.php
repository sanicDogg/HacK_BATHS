<?php
//подключаем библиотеку redbeanphp
require "libs/rb.php";
//Подключаемся к базе
R::setup( 'mysql:host=mysite.loc;dbname=students',
        'root', '123' ); //for both mysql or mariaDB

//запуск сессиии
session_start();
