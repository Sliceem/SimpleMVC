<?php

require_once './Core/autoloader.php';
require_once './Classes/Product.php';

class Model extends Product
{

    public function displayAll()
    {

        $data = Database::getInstance()->query('SELECT * FROM web_db.product');
        return $data;
    }

    public function addProduct($data = [])
    {
        $data = [
            'sku' => $data['sku'],
            'name' => $data['name'],
            'price' => $data['price'],
            'info' => trim($data['year']) . trim($data['type']) . trim($data['dimensions']),
            'image' => 'https://source.unsplash.com/200x200/?it'
        ];
        Database::getInstance()->addProduct("INSERT INTO web_db.product (SKU, product_name, price, product_info, image_path) VALUES (?, ?, ?, ?, ?)", $data);
    }

    public function deleteProduct($data = [])
    {   
        $id = implode(',', $data['checkbox']);
        Database::getInstance()->deleteQuery("DELETE FROM web_db.product WHERE product_id IN ($id)");
    }
}
