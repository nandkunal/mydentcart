<?php
ob_start();
/*
 * Database Constants
 *
 */
define('DB_HOSTNAME','localhost');
define('DB_LOGIN', 'mydentca_user123');
define('DB_PASSWORD', ',M4*4S%f(_+W');
define('DB_DIR', 'mydentca_');
define('DB_DATABASE', DB_DIR.'mydentcart');
define('DB_DSN','mysql:dbname='.DB_DATABASE.';host='.DB_HOSTNAME.'');


/*ROLES FOR ADMIN, USER AND SUB-ADMINS
*/
//define('ALLOWED_ROLES',array('admin'=>2,'sub-admin'=>7,'user'=>9));

/*
 * CUSTOMISED ERROR CODES
 * */
define('AUTH_ERROR',12001);
define('REGISTRATION_FAILED',12002);
define('USERS_AUTH_ERROR',12003);

/*
CUSTOMISED ERROR MESSAGE
*/
define('AUTH_ERROR_MESSAGE','Authentication Failed,Please try again');
define('REGISTRATION_FAILED_MESSAGE','An Error Occurred,Please try again');


/*
 * REDIRECTION PAGES*/
define('HOME_ADMIN','home.php');
define('AUTH_FAILED_HOME','index.html');
define('HOME_USERS','home.php');
define('USERS_AUTH_FAILED_HOME','index.php');


/*
LOGGERS CONSTANT

*/
define("LOG_FILE","logs/".date("Y-m-d")." - error.log");

/*

MATRIX PAY CONSTANT

*/
define("MATRIX_COUNT_MAX_CHILD_REFFERAL",3);
define("MATRIX_FIRST_LEVEL",500);
define("MATRIX_SECOND_LEVEL",300);
define("MATRIX_THIRD_LEVEL",100);

/* TYPES OF PAYMENTS
*/
define("REFFERAL_PAYMENT",1);
define("DIRECT_REFFERAL_PAYMENT",2);
define("BONUS_DIRECT_REFFERAL_PAYMENT",3);

/*ACCOUNT STATUS
*/
define("DEFAULT_ACCOUNT_STATUS",1);//Active
define("ACTIVE",1);
define("DEACTIVE",0);

/*
BINARY TREE CONSTANTS

*/
define("RIGHT_CHILD",2);
define("LEFT_CHILD",1);

define("LEFT_DB_COLUMN","left_child_count");
define("RIGHT_DB_COLUMN","right_child_count");

/* TYPES OF BINARY PAYMENTS
*/
define("REGULAR_BINARY_INCOME",1);
define("SPILL_BINARY_INCOME",2);
/*
BINARY  PAY CONSTANT

*/
define("REGULAR_BINARY_INCOME_RATIO_OPTION1",0.5);
define("REGULAR_BINARY_INCOME_RATIO_OPTION2",2);
define("SPILL_BINARY_INCOME_RATIO",1);
define("REGULAR_BINARY_INCOME_AMOUNT",500);
define("SPILL_BINARY_INCOME_AMOUNT",1000);


/*
PAYMENT STATUS

*/

define("PAID",1);
define("NOTPAID",0);
define("BLOCKED",2);
/*
BINARY/MATRIX TREE IMAGES
*/
define("IMAGE_FULL_CHILD","images/user.png");
define("IMAGE_EMPTY_CHILD","images/user_blank.png");
define("IMAGE_INACTIVE_CHILD","images/blok.png");



?>