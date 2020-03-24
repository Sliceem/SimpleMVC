<?php

require_once './Core/autoloader.php';

class Model{

    public function displayAll(){

        $data = Database::getInstance()->query('SELECT * FROM web_db.users');
        return $data;
    }

    public function addProduct($data = []){

        var_dump($data);
    }

    public function deleteProduct($data = []){

        var_dump($data);

    }
}