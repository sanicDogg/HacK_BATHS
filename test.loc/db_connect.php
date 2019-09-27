<?php
//подключаем библиотеку redbeanphp
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=test',
        'root', '' ); //for both mysql or mariaDB
if(!R::testConnection()) die('No DB connection!');
//запуск сессиии
session_start();
