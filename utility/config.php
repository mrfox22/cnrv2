<?php
session_start();

date_default_timezone_set('Asia/Shanghai');


if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);


if (!defined('SERVER_URL')) define('SERVER_URL', $_SERVER['HTTP_HOST']);
if (!defined('SERVER_PATH')) define('SERVER_PATH', realpath($_SERVER['DOCUMENT_ROOT']));


if (!defined('PATTERN')) define('PATTERN', '/^\w+\.loc$/');
if (!defined('PRODUCTION_MODE')) {
  if (preg_match(PATTERN, SERVER_URL)) {
    define('PRODUCTION_MODE', false);
  } else {
    define('PRODUCTION_MODE', true);
  }
}