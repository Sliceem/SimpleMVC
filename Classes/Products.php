<?php

abstract class Products
{
    protected $SKU;
    protected $name;
    protected $price;

    public function __construct($data = [])
    {
        $this->SKU = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
    }

    //Get Current product info (unique by type)
    abstract protected function getProductInfo();

    //Inserts current product to DB
    protected function insertProduct()
    {
        $productData = [$this->SKU, $this->name, $this->price, $this->getProductInfo()];
        Database::getInstance()->addProduct("INSERT INTO web_db.product (SKU, product_name, price, product_info) VALUES (?, ?, ?, ?)", $productData);
    }
}
