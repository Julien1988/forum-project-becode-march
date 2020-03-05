<?php
spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

$bgate = new BoardGateway();
$tgate = new TopicGateway();
$mgate = new MessageGateway();

$boards = $bgate->findAll();

foreach ($boards as $board) {
    $topics = $tgate->findAllByBoardId($board->getId());
    foreach ($topics as $topic) {
        $messages = $mgate->findAllByTopicId($topic->getId());
        $topic->setMessages($messages);
    }
    $board->setTopics($topics);
}

echo($boards[0]->getName());
echo("/// topic id = ");
echo($boards[0]->getTopics()[0]->getId());
echo($boards[0]->getTopics()[0]->getMessages()[0]->getContent());

