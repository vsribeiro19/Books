<?php
include_once './database/connection.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
var_dump($dados);

if(!empty($dados['cadastrar'])){
    var_dump($dados);
    "INSERT INTO register (null, nome, email, senha) VALUES (:nome, :email, :senha)";

}