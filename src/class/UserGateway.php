<?php
require_once("DatabaseManager.php");

class UserGateway
{

    public function findAll()
    {
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM users');
            $sth->execute();
            $users = $sth->fetchAll();
            print_r($users);
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    public function find($id)
    {
        $statement = 'SELECT * FROM users WHERE id = ?';

        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare($statement);
            $sth->execute([$id]);
            $users = $sth->fetchAll();
            print_r($users[0]['email']);
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    public function insert()
    {
        $statement = 'INSERT INTO User ';
    }

    public function getPwdFrom($email)
    {
        $statement = 'SELECT password from users WHERE email = ?';
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare($statement);
            $sth->execute([$email]);
            $userEmail = $sth->fetch()['password'];
            print_r($userEmail);
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }
}
