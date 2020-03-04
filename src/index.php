

<?php echo  "hello " . "<br>";
?>
<br>
<?php

require('config.php');

// $sql = "SELECT users.name, messages.content FROM users, messages WHERE users.idUsers = messages.Users_idUsers ";
$sql = "SELECT users.name, messages.content FROM users INNER JOIN messages ON users.idUsers = messages.Users_idUsers ";
$res_select = $db_connect->query($sql);
$resLine = $res_select->fetchall();

// Boucle de récupération des messages et du nom de l'auteur

$resLineCount = count($resLine);

for ($i = 0; $i < $resLineCount; $i++) {
    echo $resLine[$i]["content"];
    ?>
<br>
<br>
<?php
    echo $resLine[$i]["name"];
?>
<br>
<br>
<?php
}





