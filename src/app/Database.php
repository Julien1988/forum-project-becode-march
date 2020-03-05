<?php

namespace App;

use \PDO;

class Database
{
    private  $db_name;
    private  $db_user;
    private  $db_host;
    private  $db_pass;
    private  $pdo;

    public function __construct($db_name = 'forum-project', $db_user = 'root', $db_pass = 'root', $db_host = 'mysql:3306')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_host = $db_host;
        $this->db_pass = $db_pass;
    }

    private function getPDO()
    {
        if ($this->pdo === null) {

            $pdo = new PDO('mysql:dbname=forum-project;host=mysql:3306', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name)
    {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }
}
