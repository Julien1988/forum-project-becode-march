<?php
require_once("DatabaseManager.php");
require_once("Board.php");

class BoardGateway{
    public function findAll() : iterable
    {
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM boards');
            $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Board');
            $sth->execute();
            $boards = $sth->fetchAll();
            return $boards;
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    public function findById($id)
    {
        try{
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM boards WHERE boards.idboards  = ?');
            $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Board');
            $sth->execute([$id]);
            $board = $sth->fetch();
            return $board;
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }
}