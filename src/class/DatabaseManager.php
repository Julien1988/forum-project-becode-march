<?php
class DatabaseManager {

    private const DB_NAME = "test";
    private const HOST = "mysql:3306";
    private const USER = "root";
    private const PWD = "root";

    private static $instance = null;
    private $database;

    public static function getInstance() : DatabaseManager  
    {
        if (self::$instance == null) {
            self::$instance = new static;
        }
        return self::$instance;
    }

    protected function __construct()
    {
        try {
            $db = new PDO("mysql:dbname=" . $this::DB_NAME . ";host=" . $this::HOST, $this::USER, $this::PWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
        } catch (\Throwable $th) {
            echo 'Connection to database failed : ' . $th->getMessage();
        }
        $this->database = $db;
    }
    
    public function getDatabase()
    {
        return $this->database;
    }
}