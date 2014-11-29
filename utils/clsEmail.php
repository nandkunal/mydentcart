<?php

/**
 * Class to send emails
 * 
 * @copyright Lellys Informáica
 * @author Ítalo Lelis de Vietro
 * @link http://www.lellysinformatica.com
 * 
 * @version 1.3.2
 * 
 * How To Use: 
 * @example
 * $email = new clsEmail('destinationemail@exemple.com', 'fromemail@exemple.com');
 * $email->sendEmail('subject', 'message');
 * 
 * @example 
 * $email = new clsEmail('destinationemail@exemple.com', 'fromemail@exemple.com');
 * 
 * $subject = 'Hello World';
 * $message = '<h1>Hello World</h1>'
 *            '<p>this is the body message</p>';
 *              
 * $email->sendEmail($subject, $message);
 * 
 * @license GNU General Public License, version 3 (GPL-3.0)
 * @see http://www.opensource.org/licenses/gpl-3.0.html
 */
class clsEmail {

    /**
     * Destination e-mail
     * @var string 
     */
    private $destinationEmail;

    /**
     * Email sender
     * @var string
     */
    private $from;

    /**
     * Sets if the email was correctly sent
     * @var bool
     */
    private $isSent = false;

    /**
     * Sets if the email will have HTML tags
     * @var bool
     */
    private $isHTML = true;

    /**
     * Sets whether the sender will be shown
     * @var bool
     */
    private $showFrom = true;

    /**
     * Inicialize a new object of type EasyEmail
     * @param string $destinationEmail
     * @param string $from 
     */
    function __construct($destinationEmail, $from) {
        $this->destinationEmail = $destinationEmail;
        $this->from = $from;
    }

    public function getIsHTML() {
        return $this->isHTML;
    }

    public function setIsHTML($isHTML) {
        $this->isHTML = $isHTML;
    }

    public function getShowFrom() {
        return $this->showFrom;
    }

    public function setShowFrom($showFrom) {
        $this->showFrom = $showFrom;
    }

    public function getIsSent() {
        return $this->isSent;
    }

    private function buildHeader($add_headers) {
        //Sets the header with the appropriate settings
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= ($this->isHTML == true) ? "Content-type: text/html; charset=UTF-8\r\n" : '';
        $headers .= ( $this->showFrom == true) ? "From: $this->from\r\n" : '';
        $headers .= $add_headers;
        return $headers;
    }

    /**
     * Send the email to destination
     * @param string $subject
     * @param string $message
     * @param string $add_headers
     * @return bool 
     */
    public function sendEmail($subject, $message, $addHeaders = null) {
        //If the 'mail' function doesn't exists
        if (!function_exists("mail")) {
            return $this->isSent = false;
        } else {
            if (mail($this->destinationEmail, $subject, $message, $this->buildHeader($addHeaders)))
                $this->isSent = true;
            else
                $this->isSent = false;
        }
        return $this->isSent;
    }

}

?>
