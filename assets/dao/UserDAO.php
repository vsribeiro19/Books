<?php

require_once("./models/User.php");

class UserDAO implements UserDAOInterface
{

    private $conn;
    // private $url;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function buildUser($data)
    {
        $user = new User();
        $user->id = $data["id"];
        $user->nome = $data["nome"];
        $user->email = $data["email"];
        $user->senha = $data["senha"];
    }
    public function create(User $user, $authUser = false)
    {
    }
    public function update(User $user)
    {
    }
    public function verifyToken($protected = false)
    {
    }
    public function setTokenToSession($token, $redirect = true)
    {
    }
    public function authenticateUser($email, $senha)
    {
    }
    public function findByEmail($email)
    {
    }
    public function findById($id)
    {
    }
    public function findByToken($token)
    {
    }
    public function changePassword(User $user)
    {
    }
}
