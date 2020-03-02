<?php
$host = "localhost";
$dbname = "test";
$user = "user";
$pass = "pass";

try {
  $db_connect = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
}
catch (PDOException $e) {
	die("Erreur en se connectant à la BD: " . $e->getMessage());
}