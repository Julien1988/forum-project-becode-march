<?php
require_once('DatabaseManager.php');
require_once('Message.php');

class MessageGateway{
    public function findAllByTopicId($id)
    {
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM messages WHERE messages.topics_idtopics = ?');
            $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Message');
            $sth->execute([$id]);
            $messages = $sth->fetchAll();
            return $messages;
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }

    public function findXByTopicId($id)
    {
        try {
            $db = DatabaseManager::getInstance()->getDatabase();
            $sth = $db->prepare('SELECT * FROM messages WHERE messages.topics_idtopics = ? LIMIT 3');
            $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Message');
            $sth->execute([$id]);
            $messages = $sth->fetchAll();
            print_r($messages);
        } catch (\PDOException $th) {
            echo ($th->getMessage());
        }
    }
}