<?php
session_start();

date_default_timezone_set('Asia/Shanghai');


if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);


if (!defined('BASE_URL')) define('BASE_URL', $_SERVER['HTTP_HOST']);
if (!defined('BASE_PATH')) define('BASE_PATH', realpath($_SERVER['DOCUMENT_ROOT']));
