<?php

require_once('./Core/init.php');

class Database

{
    private $result;
    private $pdo;
    private static $instance = null;
    private $count;

    //automaticaly creates connection with database
    private function __construct()
    {
        $dsn = 'mysql:host' . HOST . ';dbname=' . DBNAME;
        try {
            $this->pdo = new PDO($dsn, USER, USER_PASS);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Error accured: ' . $e->getMessage() . BR;
            die();
        }
    }
    //Singltone, check if instanse(connestion) exists
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    //Fetch date from DB
    public function query($sql)
    {
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $this->result = $query->fetchall();
        // $this->count = $this->query->rowCount();
        return $this->result;
    }
    //Delets data from DB
    public function deleteQuery($sql)
    {
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }
    //Add Data to DB
    public function addProduct($sql, $data)
    {
        $query = $this->pdo->prepare($sql);
        $x = 1;
        foreach($data as $key => $value){
            $query->bindValue($x, $value);
            $x++;
        }
        $query->execute();
    }
}
