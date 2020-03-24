<?php

require_once ('Config.php');

class Database

{

    private $pdo;
    private static $instance = null;


    private function __construct()
    {
        $dsn = 'mysql:host' . HOST . ';dbname=' . DBNAME;
        try {
            $opt = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $this->pdo = new PDO($dsn, USER, USER_PASS, $opt);
            // $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Error accured: ' . $e->getMessage() . BR;
            die();
        }
    }
    //Singltone check if instanse exists
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function query($sql)
    {
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchall();
        return $result;
    }
}
