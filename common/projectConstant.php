<?php
ob_start();
/*
 * Database Constants
 *
 */
define('DB_HOSTNAME','localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'root');
define('DB_DIR', '');
define('DB_DATABASE', DB_DIR.'mydentcart');
define('DB_DSN','mysql:dbname='.DB_DATABASE.';host='.DB_HOSTNAME.'');
?>