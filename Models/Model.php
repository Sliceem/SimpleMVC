<?php

require_once './Core/init.php';

class Model
{

    public function displayAll()
    {
        //Fetch all Products from Databse
        $data = Database::getInstance()->query('SELECT * FROM web_db.product');
        return $data;
    }
    //Get Class by Product type, and create instance
    public function addProduct($data = [])
    {
            $class = $data['selector'];
            new $class($data);
    }
    //Delete product or Products from Database
    public function deleteProduct($data = [])
    {   
        $id = implode(',', $data['checkbox']);
        Database::getInstance()->deleteQuery("DELETE FROM web_db.product WHERE product_id IN ($id)");
    }
}
