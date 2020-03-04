<?php
class User{
    private $id;
    private $username;
    private $password;
    private $avatar;
    private $signature;

    public function __construct($username,$password,$avatar,$signature) {
        $this->username = $username;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->signature = $signature;
    }
}