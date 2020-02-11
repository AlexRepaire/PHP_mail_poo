<?php

class mail
{
    private $to;
    private $subject;
    private $message;

    public function __construct($to, $subject, $message){
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function sendMail(){
        mail($this->to, $this->subject, $this->message);
        return "message bien envoyé";
    }
}