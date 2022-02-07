<?php
include_once './database/connection.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
var_dump($dados);

