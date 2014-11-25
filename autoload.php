<?php
/**
 * Created by JetBrains PhpStorm.
 * User: khaku01
 * Date: 7/3/14
 * Time: 8:30 PM
 * To change this template use File | Settings | File Templates.
 */

/*Directories that contain classes*/
define("ROOT_DIR","");
$classesDir = array (
    ROOT_DIR.'entities/',
    ROOT_DIR.'exceptions/',
    ROOT_DIR.'utils/',
    ROOT_DIR.'dao/',
    
);

function __autoload($class_name) {
    global $classesDir;
    foreach ($classesDir as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            //echo $directory . $class_name . '.php';
            require_once ($directory . $class_name . '.php');
            return;
        }
    }
}