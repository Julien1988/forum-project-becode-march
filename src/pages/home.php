<?php

// Affichage des messages liés aux nom d'utilisateurs

$db = new App\Database();
$datas = $db->query('SELECT users.name, messages.content FROM users INNER JOIN messages ON users.idUsers = messages.Users_idUsers', 'App\Table\Article');


foreach ($datas as $data) {
    echo $data->content;

?>
    <br>
    <?php
    echo $data->author;
    ?>
    <br>
    <br>
    <br>
<?php
}
