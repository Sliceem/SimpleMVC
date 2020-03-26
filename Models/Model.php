<?php

require_once './Core/autoloader.php';
require_once './Classes/Product.php';

class Model extends Product
{

    public function displayAll()
    {

        $data = Database::getInstance()->query('SELECT * FROM web_db.users');
        return $data;
    }

    public function addProduct($data = [])
    {
        $data = Database::getInstance()->addProduct("INSERT INTO web_db.users (email, user_name, user_password) VALUES (2,3,4)");
    }

    public function deleteProduct($data = [])
    {   
        $id = implode(',', $data['checkbox']);
        Database::getInstance()->deleteQuery("DELETE FROM web_db.users WHERE user_id IN ($id)");
    }
}
