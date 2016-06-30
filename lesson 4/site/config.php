<?php
define('SITE_ROOT',  __DIR__);
define('WWW_ROOT',   SITE_ROOT . '/www');

define('DATA_DIR',   SITE_ROOT . '/data');
define('LIB_DIR',    SITE_ROOT . '/lib');
define('TPL_DIR',    SITE_ROOT .DIRECTORY_SEPARATOR . 'templates');
define('LAY_DIR',    TPL_DIR . DIRECTORY_SEPARATOR . 'layout');

define('LAYOUT',     LAY_DIR . DIRECTORY_SEPARATOR . 'base.php');
define('TITLE', 'PHP, DZ-4');

require_once(LIB_DIR . '/functions.php');
require_once(DATA_DIR . '/dataconn.php');
