<?php
session_start();

date_default_timezone_set('Asia/Shanghai');


if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);


if (!defined('SERVER_URL')) define('SERVER_URL', $_SERVER['HTTP_HOST']);
if (!defined('SERVER_PATH')) define('SERVER_PATH', realpath($_SERVER['DOCUMENT_ROOT']));


if (!defined('PRODUCTION_MODE')) {
  if (preg_match('/^\w+\.loc$/', SERVER_URL)) {
    define('PRODUCTION_MODE', false);
  } else {
    define('PRODUCTION_MODE', true);
  }
}

if(!defined('DB_HOST'))                 define('DB_HOST', 'localhost');
if(!defined('DB_NAME'))                 define('DB_NAME', 'cnrv2_db');
if(!defined('DB_USER'))                 define('DB_USER', 'root');
if(!defined('DB_PASSWORD'))             define('DB_PASSWORD', '');

if (PRODUCTION_MODE) {
  if (!defined('PROJECT_FOLDER')) define('PROJECT_FOLDER', 'cnrv2');
  if (!defined('BASE_URL')) define('BASE_URL', SERVER_URL.'/'.PROJECT_FOLDER);
  if (!defined('BASE_PATH')) define('BASE_PATH', SERVER_PATH.DS.PROJECT_FOLDER);
} else {
  if (!defined('BASE_URL')) define('BASE_URL', SERVER_URL);
  if (!defined('BASE_PATH')) define('BASE_PATH', SERVER_PATH);
}


