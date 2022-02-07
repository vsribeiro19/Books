<?php

class User
{
    public $id;
    public $nome;
    public $email;
    public $senha;
}


interface UserDAOInterface{
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user);
    public function verifyToken($protected = false);
    public function setTokenToSession($token,$redirect = true);
    public function authenticateUser($email, $senha);
    public function findByEmail($email);
    public function findById($id);
    public function findByToken($token);
    public function changePassword(User $user);
}