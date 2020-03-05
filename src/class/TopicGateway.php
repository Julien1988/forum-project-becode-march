<?php
require_once('DatabaseManager.php');
require_once('Topic.php');

class TopicGateway{
    public function findAllByBoardId($id)
    {
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM topics WHERE topics.boards_idboards = ? AND `date-creation` IS NOT NULL ORDER BY `date-edit`, `date-creation`');
            $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Topic');
            $sth->execute([$id]);
            $topics = $sth->fetchAll();
            return $topics;
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    public function createTopic($name,$idAuthor,$idBoard)
    {
        $statement = 'INSERT INTO topics (name, Users_idUsers, boards_idboards) VALUES (?, ?, ?)';

        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare($statement);
            $sth->execute([$name,$idAuthor,$idBoard]);
            echo $db->lastInsertId();
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    //SELECT * FROM `topics` WHERE `boards_idboards` = 1 AND `date-creation` IS NOT NULL ORDER BY `date-edit`, `date-creation` 
}