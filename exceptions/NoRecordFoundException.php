<?php
/**
 * Created by JetBrains PhpStorm.
 * User: khaku01
 * Date: 7/10/14
 * Time: 5:34 PM
 * To change this template use File | Settings | File Templates.
 */

class NoRecordFoundException extends  Exception {

    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}