<?php

define('APP_NAME','IMDB');
define("BASE_URL","http://localhost/IMDB/");
define("BASE_DIR","/IMDB/");

$tmp = explode('?', $_SERVER['REQUEST_URI']);
define('CURRENT_ROUTE', str_replace(BASE_DIR,'',$tmp[0]));

define('DB_HOST','localhost');
define('DB_NAME','imdb');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


