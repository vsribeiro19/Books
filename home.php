<?php
require_once("./models/User.php");
require_once("./dao/UserDAO.php");
require_once("./models/Message.php");
require_once("./database/connection.php");

$message = new Message($BASE_URL);

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
    $name = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $senha = filter_input(INPUT_POST, "senha");
    $confSenha = filter_input(INPUT_POST, "conf_senha");

    if($name && $email && $senha){

    }else{
        $message->setMessage("Por favor, preencha todos os campos!", "error", "back");
        $message->getMessage("Por favor, preencha todos os campos!", )
    }
} 
else if ($type === "login") {

}
