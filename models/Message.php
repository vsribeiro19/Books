<?php

class Message {
    private $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function setMessage($msg, $type, $redirect = ""){
        $_SESSION["msg"] = $msg;
        $_SESSION["type"] = $type;
        if($redirect != "back"){
            header("Location: $this->url" . $redirect);
        }else{
            header("Location: " .$_SERVER['HTTP_REFERER']);
        }
    }

    public function getMessage(){

    }

    public function clearMesage(){

    }
}