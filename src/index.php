

<?php echo  "hello " . "<br>";
?>
<br>
<?php

require('config.php');

$sql = "SELECT users.name, messages.content FROM users, messages ";
$res_select = $db_connect->query($sql);
$resLine = $res_select->fetchall();


//var_dump($resLine[0]); // même valeur

echo $resLine[0]["name"];

?>
<br>
<br>
<?php

echo $resLine[0]["content"];






